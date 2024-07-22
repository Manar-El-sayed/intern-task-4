// Fetch posts and display them
fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(posts => {
        const postsContainer = document.getElementById('posts-container');
        posts.forEach(post => {
            const postElement = document.createElement('div');
            postElement.classList.add('post','col-md-6','mb-4','border', 'border-secondary', 'rounded','pt-3');
            postElement.innerHTML = `
            <div class=" text-center">
                <h3 class=" pb-3">${post.title}</h3>
                <p class="text-secondary pb-3 fst-italic">${post.body}</p>
                <button class="mb-4 btn btn-outline-info mx-auto" data-post-id="${post.id}">Fetch Comments</button>
                <div class="comments" id="comments-${post.id}"></div>
            </div>
            `;
            postsContainer.appendChild(postElement);

            // Add event listener to button
            const button = postElement.querySelector('button');
            button.addEventListener('click', function(event) {
                const postId = this.getAttribute('data-post-id');
                const commentsContainer = document.getElementById(`comments-${postId}`);

                if (commentsContainer.innerHTML === '') {
                    // Fetch comments for the post
                    fetch(`https://jsonplaceholder.typicode.com/posts/${postId}/comments`)
                        .then(response => response.json())
                        .then(comments => {
                            comments.forEach(comment => {
                                const commentElement = document.createElement('div');
                                commentElement.classList.add('comment','mb-5');
                                commentElement.innerHTML = `
                                    <p><strong>${comment.name}</strong></p>
                                    <p class="email text-info">${comment.email}</p>
                                    <p class="text-secondary">${comment.body}</p>
                                `;
                                commentsContainer.appendChild(commentElement);
                            });
                        });
                } else {
                    commentsContainer.innerHTML = '';
                }
            });
        });
    })
    .catch(error => {
        console.error('Error fetching posts:', error);
    });