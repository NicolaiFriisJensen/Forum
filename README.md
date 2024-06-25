# Forum
Forum with various functions created with PHP, HTML, CSS and JavaScript

I was tasked with implementing a blog system where new users can register and existing users can log in. Registered users can create new blog posts, edit their own posts, add images to their posts, comment on others' posts, and delete their own comments or comments on their own posts.

The blog server must maintain a database of registered users, posts, images (with attachments to specific posts), and comments on posts.

The system should allow users to:

* Register as a new user (sign up by creating a profile).

* On the registration/signup page, ensure that the user's password is secure (at least 8 characters) before allowing registration.
  Log in (if already registered).

* Log out (if logged in).

* Write new blog posts (if logged in).

* Attach images to their own blog posts.

* Comment on others' blog posts (if logged in).

* Edit an existing blog post (if logged in and authored the original post).

* Delete an existing comment (if logged in and either authored the comment or authored the post the comment is on).

* Additionally, the system should allow non-logged-in users to view and navigate through users, posts, images, and comments.

The interface should display a continuously updated timestamp on all visible pages.

Please note:

* Only authenticated users should be able to log in.

* Only logged-in users should be able to create or edit posts, and comment on posts (with comments restricted to existing posts).

* Only the user who authored a post can modify it.

* Only the user who authored a comment or the author of the post the comment is on can delete the comment.

The provided API functions do not validate input, so it is essential that your solution ensures:

* Only recognized users can log in.

* Only logged-in users can perform actions such as writing posts or comments.

* Comments can only be made on existing posts.
