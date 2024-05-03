<!DOCTYPE html>
<html>
<head>
    <title>Edit Training</title>
</head>
<body>
    <h1>Edit Training</h1>
    <form method="post">
        <label for="DealOwner">Deal Owner:</label>
        <input type="text" name="DealOwner" value="<?= $training['DealOwner'] ?>"><br>
        
        <label for="BusinessCategory">Business Category:</label>
        <input type="text" name="BusinessCategory" value="<?= $training['BusinessCategory'] ?>"><br>
        
        <label for="CustomerType">Customer Type:</label>
        <input type="text" name="CustomerType" value="<?= $training['CustomerType'] ?>"><br>
        
        <label for="TrainingCategory">Training Category:</label>
        <input type="text" name="TrainingCategory" value="<?= $training['TrainingCategory'] ?>"><br>
        
        <label for="CoursesRequired">Courses Required:</label>
        <input type="text" name="CoursesRequired" value="<?= $training['CoursesRequired'] ?>"><br>
        
        <label for="NumberOfParticipants">Number of Participants:</label>
        <input type="number" name="NumberOfParticipants" value="<?= $training['NumberOfParticipants'] ?>"><br>
        
        <label for="Concessions">Concessions:</label>
        <input type="text" name="Concessions" value="<?= $training['Concessions'] ?>"><br>
        
        <label for="CompanyName">Company Name:</label>
        <input type="text" name="CompanyName" value="<?= $training['CompanyName'] ?>"><br>
        
        <label for="TypeOfBusiness">Type of Business:</label>
        <input type="text" name="TypeOfBusiness" value="<?= $training['TypeOfBusiness'] ?>"><br>
        
        <label for="NextStep">Next Step:</label>
        <input type="text" name="NextStep" value="<?= $training['NextStep'] ?>"><br>
        
        <label for="ContactName">Contact Name:</label>
        <input type="text" name="ContactName" value="<?= $training['ContactName'] ?>"><br>
        
        <label for="CourseValue">Course Value:</label>
        <input type="text" name="CourseValue" value="<?= $training['CourseValue'] ?>"><br>
        
        <label for="ClosingDate">Closing Date:</label>
        <input type="date" name="ClosingDate" value="<?= $training['ClosingDate'] ?>"><br>
        
        <label for="Stage">Stage:</label>
        <input type="text" name="Stage" value="<?= $training['Stage'] ?>"><br>
        
        <label for="ConversionRate">Conversion Rate:</label>
        <input type="text" name="ConversionRate" value="<?= $training['ConversionRate'] ?>"><br>
        
        <label for="CampaignSource">Campaign Source:</label>
        <input type="text" name="CampaignSource" value="<?= $training['CampaignSource'] ?>"><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
