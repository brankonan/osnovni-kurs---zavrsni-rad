const comments_btn = document.querySelector("#comments-btn");
const comments_list = document.querySelector("#comments-list");

comments_btn.addEventListener("click", () => {
  if (comments_btn.innerHTML === "Hide comments") {
    comments_list.style.display = "none";
    comments_btn.innerHTML = "Show comments";
  } else {
    comments_list.style.display = "block";
    comments_btn.innerHTML = "Hide comments";
  }
});

function confirmDelete() {
  if (confirm("Do you really want to delete this post?")) {
    window.location.href = "delete-post.php?post_id=" + post_id;
  }
}

function confirmDeleteComment() {
  if (confirm(`Do you really want to delete this comment?}`)) {
    window.location.href =
      "delete-comment.php?comment_id=" + comment_id + "&post_id=" + post_id;
  }
}
