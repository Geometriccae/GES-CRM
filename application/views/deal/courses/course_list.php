<!-- application/views/courses/course_list.php -->

<div class="container">
    <h2>Course List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $course) : ?>
                <tr>
                    <td><?= $course['id']; ?></td>
                    <td><?= $course['Courses_Required']; ?></td>
                    <td>
                        <a href="<?= base_url('courses/edit/' . $course['id']); ?>">Edit</a>
                        <a href="<?= base_url('courses/delete/' . $course['id']); ?>" onclick="return confirm('Are you sure you want to delete this course?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('courses/add'); ?>" class="btn btn-primary">Add Course</a>
</div>
