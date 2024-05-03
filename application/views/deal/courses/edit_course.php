<!-- application/views/courses/edit_course.php -->

<div class="container">
    <h2>Edit Course</h2>
    <form method="post" action="<?= base_url('courses/edit/' . $course['id']); ?>">
        <div class="form-group">
            <label for="Courses_Required">Course Name:</label>
            <input type="text" class="form-control" id="Courses_Required" name="Courses_Required" value="<?= $course['Courses_Required']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="<?= base_url('courses'); ?>" class="btn btn-secondary">Back to Course List</a>
</div>
