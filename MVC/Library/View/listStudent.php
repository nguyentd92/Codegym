<h2>Students List</h2>
<a href="./index.php?page=add">ADD</a>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $student->name ?></td>
            <td><?php echo $student->phone ?></td>
            <td><?php echo $student->address ?>
                <?php endforeach; ?>
    </tbody>
</table>