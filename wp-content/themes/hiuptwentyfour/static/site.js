let currentPage = 1;
const loadMoreBtn = document.querySelector("#js-load-more");

const getMoreData = (event) => {
  event.preventDefault();
  const resultLists = document.querySelector(".js-lists");
  const paginationWrapper = document.querySelector(".js-pagination-wrapper");
  currentPage++;

  const btnEl = event.target;
  const { totalPages: maxNoPages, postsPerPage: postsPerPage } =
    btnEl.dataset;

  let loadMoreData = new FormData();
  loadMoreData.append("action", "load_more");
  loadMoreData.append("paged", currentPage);
  loadMoreData.append("posts_per_page", postsPerPage);
  loadMoreData.append("max_no_pages", maxNoPages);
  const ajaxURL = "/wp-admin/admin-ajax.php";

  fetch(ajaxURL, {
    method: "POST",
    body: loadMoreData,
  })
    .then((response) => response.json())
    .then((response) => {
      if (response.success) {
        resultLists.innerHTML += response.data.content;
      }

      if (currentPage == maxNoPages) {
        paginationWrapper.style.display = "none";
      }
    })
    .catch((error) => {
      console.log("catch error", error);
    });
};

loadMoreBtn && loadMoreBtn.addEventListener("click", getMoreData);
