<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <div class="form-container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Submit Information of The Event</h2>

            <label for="cname">Council Name :</label>
            <select id="cname" name="cname" required>
                <option value="">Select your council name</option>
                <option value="Codecell">Codecell</option>
                <option value="CSI">CSI</option>
                <option value="SMLRA">SMLRA</option>
                <option value="Datazen">Datazen</option>
                <option value="Bloombox">Bloombox</option>
                <option value="ISTE">ISTE</option>
                <option value="IETE">IETE</option>
                <option value="EESA">EESA</option>
                <option value="MESA">MESA</option>
                <option value="Student Coucil">Student Coucil</option>
                <option value="Team Yugandhar">Team Yugandhar</option>
                <option value="Team Rhapsody">Team Rhapsody</option>
                <option value="Team Insignia">Team Insignia</option>
                <option value="Team Palinoia">Team Palinoia</option>
                <option value="Team Gyrations">Team Gyrations</option>
                <option value="Team Shutterbugs">Team Shutterbugs</option>
                <option value="Team Parvaah">Team Parvaah</option>
                <option value="Team Octavium">Team Octavium</option>
                <option value="Team Illuminati">Team Illuminati</option>
                <option value="Team PUSH-KJSCE">Team PUSH-KJSCE</option>
                <option value="Team EMFINITY">Team EMFINITY</option>
                <option value="SAHAS">SAHAS</option>
                <option value="Team Robocon">Team Robocon</option>
                <option value="Team Onyx">Team Onyx</option>
                <option value="Team ETA">Team ETA</option>
                <option value="Team Redshift Racing">Team Redshift Racing</option>
                <option value="Team Orion">Team Orion</option>
             
             
            </select>

            <label for="name">Name of the event:</label>
            <input type="text" id="name" name="name" required>

            <label for="name">Date of event:</label>
            <input type="datetime-local" id="name" name="name" required>

            <label for="email">Contact email:</label>
            <input type="email" id="email" name="email" required>

            <label for="brocher">Brocher of the event:</label>
            <input type="file" id="brocher" name="brocher" accept=".pdf,.doc,.docx" required>

            <input type="submit" value="Submit">
        </form>
        
    </div>
   

</body>
</html>
