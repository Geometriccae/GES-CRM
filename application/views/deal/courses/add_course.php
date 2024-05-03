<!-- application/views/courses/add_course.php -->

<div class="container">
    <h2>Add Course</h2>
    <form method="post" action="<?= base_url('courses/add'); ?>">
        <div class="form-group">
            <label for="Courses_Required">Course Name:</label>
            <input type="text" class="form-control" id="Courses_Required" name="Courses_Required" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="<?= base_url('courses'); ?>" class="btn btn-secondary">Back to Course List</a>
</div>
