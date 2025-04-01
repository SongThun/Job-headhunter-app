<!DOCTYPE html>
<html>
<head>
    <title>Add New Job Post</title>
</head>
<body>
    <h2>Add New Job Post</h2>
    <form action="admin_add_job.php" method="post">
        <label for="company_id">Company ID:</label><br>
        <input type="number" id="company_id" name="company_id" required><br><br>

        <label for="position_id">Position ID:</label><br>
        <input type="text" id="position_id" name="position_id" required><br><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="des">Description:</label><br>
        <textarea id="des" name="des" rows="4" cols="50" required></textarea><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br><br>

        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br><br>

        <label for="salary">Salary:</label><br>
        <input type="text" id="salary" name="salary" required><br><br>

        <label for="jobDecsPDF">Job Description PDF:</label><br>
        <input type="text" id="jobDecsPDF" name="jobDecsPDF" ><br><br>

        <label for="requiredDegrees">Required Degrees:</label><br>
        <input type="text" id="requiredDegrees" name="requiredDegrees" ><br><br>

        <label for="desiredSkills">Desired Skills:</label><br>
        <input type="text" id="desiredSkills" name="desiredSkills" ><br><br>

        <label for="deadline">Deadline:</label><br>
        <input type="datetime-local" id="deadline" name="deadline" ><br><br>

        <input type="submit" value="Add Job Post">
    </form>
</body>
</html>