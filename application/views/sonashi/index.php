<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Repair Request</title>
</head>
<body>

  <h2>Product Repair Request Form</h2>

haseLocation" required><br>

    <label for="purchaseDate">d) Date of Purchase:</label>
    <input type="date" id="purchaseDate" name="purchaseDate" required><br>

    <label for="warrantyStatus">Warranty Status:</label><br>
    <input type="radio" id="validWarranty" name="warrantyStatus" value="valid" required>
    <label for="validWarranty">Valid (Free Service)</label><br>
    <input type="radio" id="expiredWarranty" name="warrantyStatus" value="expired" required>
    <label for="expiredWarranty">Expired (Service Charge Applies)</label><br>

    <label for="location">e) Location:</label>
    <input type="text" id="location" name="location" placeholder="Your address or share live location" required><br>

    <label for="contactNumber">f) Preferred Number to contact:</label>
    <input type="tel" id="contactNumber" name="contactNumber" required><br>

    <label for="altContactNumber">g) Alternative Number to contact (optional):</label>
    <input type="tel" id="altContactNumber" name="altContactNumber"><br>

    <button type="submit">Submit Request</button>
  </form>

</body>
</html>
