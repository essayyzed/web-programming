<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Course Registration Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form  method="POST" id='form' action="./insert.php">
        <h1> Course Registration </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email">
       
          <label for="password">Password:</label>
          <input type="password" id="password"       name="user_password">
        
          <label>Gender:</label>
          <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">Male</label><br>
          <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">Female</label>
          
        </fieldset>
        <fieldset>  
        
          <legend><span class="number">2</span> Registration Info</legend>
              
         <label for="semester">Semester:</label>
          <select id="semester" name="semester">
              <option value="select">Select</option>
              <option value="Semester 1">Semester 1</option>
              <option value="Semester 2">Semester 2</option>
              <option value="Semester 3">Semester 3</option>
              <option value="Semester 4">Semester 4</option>
              <option value="Semester 5">Semester 5</option>
              <option value="Semester 6">Semester 6</option>
              <option value="Semester 7">Semester 7</option>
              <option value="Semester 8">Semester 8</option>
          </select>
          
          <label>Interests:</label>
          <input type="checkbox" id="web" value="web-development" name="web-development"><label class="light" for="development">Web Development</label><br>
          <input type="checkbox" id="ai" value="ai" name="user_interest"><label class="light" for="ai">Artificial Intelligence</label><br>
          <input type="checkbox" id="nlp" value="nlp" name="user_interest"><label class="light" for="nlp">Natural Language Processing</label><br>
          <input type="checkbox" id="os" value="os" name="user_interest"><label class="light" for="nlp">Operating Systems</label><br>
          <input type="checkbox" id="db" value="db" name="user_interest"><label class="light" for="nlp">Database Systems</label><br>
          <input type="checkbox" id="se" value="se" name="user_interest"><label class="light" for="nlp">Software Engneering</label><br>
          <input type="checkbox" id="pdc" value="pdc" name="user_interest"><label class="light" for="nlp">Parallel and Distributed Computing</label><br>
          <input type="checkbox" id="ns" value="ns" name="user_interest"><label class="light" for="nlp">Network Security</label><br>
          <input type="checkbox" id="cdc" value="cdc" name="user_interest"><label class="light" for="nlp">Concurrent and Distributed Computing</label><br>
          
         </fieldset>
       
        <button type="submit">Submit</button>
        
       </form>
        </div>
      </div>
      <script src="js/mian.js"></script>
    </body>
</html>
