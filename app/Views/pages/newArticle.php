<main>
    <div class="container">
        <h2 class="mt-3">New Article</h2>
        <form action="/newArticle/save" method="post">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control mb-3 w-25" placeholder="Title" required>
            <textarea name="article" id="article" class="mb-3">
                <p>Add new text here...</p>
            </textarea>
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>
</main>
<script>
    ClassicEditor.create( document.querySelector('#article') ).catch(error => console.error(error));
</script>