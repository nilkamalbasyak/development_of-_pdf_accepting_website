<!DOCTYPE html>
<html lang="en"></html> 
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>GIUAC | Submission</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #86ccbe;">
    <style>
        nav {
          font-family: Arial, Helvetica, sans-serif;
          background-image: linear-gradient(30deg, #01002c, #05035a);
          color: #fffc;
          min-width: 350px;
          box-shadow: 0 3px 3px #000;
        }
    </style>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars" style="font-size: 28px"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto mr-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="project.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="cfp.php">Call for Papers</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="submission.php">Submission</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="registration.php">Registration</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="venue.php">Venue</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <h3 class="text-center"style="color:white">PAPER SUBMISSION</h3>

    <div class="container">
      <hr>

      <div class="alert alert-warning text-dark my-4 border border-dark">
        Send full manuscript via email: <a href="basyaknilkamal@gmail.com" style="" class="text-primary">xyz@gmail.com</a>
      </div>

      <p>
        The types of submissions and how to submit your work to this conference are described in this Submission Information page. It includes
        information to guide you through the whole process, from paper&nbsp;submission through conference presentation preparation.
      </p>

      <p>&nbsp;</p>

      <p><strong>General Guidelines:</strong></p>

      <ul>
        <li>All manuscripts should be submitted in MS Word or PDF format only.</li>
        <li>Papers should address one of the topics listed in the call for papers.</li>
        <li>
          The APA referencing style is the recognized reference method, and all contributors included in the article should be appropriately
          acknowledged using referencing and citations.
        </li>
        <li>Tables and figures should be clearly labelled and must be of high quality.</li>
        <li>One author should be designated as the corresponding author (All future communications will be sent to the corresponding author).</li>
        <li>
          For submission, the corresponding author should get the consent from all the co-authors. GIUAC will not be liable for responding to the
          manuscript's co-authors.
        </li>
        <li>The entire submission process will be handled only through the conference email in a very professional manner.</li>
        <li>Submit the paper via email on or before the stipulated deadline.</li>
        <li>
          Authors should proof-read the manuscript to avoid any grammatical or typographical errors. Papers can be rejected due to a poor standard of
          English.
        </li>
      </ul>

      <p>&nbsp;</p>

      <div class="alert alert-info d-table text-dark">
        <h5 class="border-bottom border-secondary mb-3"><b>Paper Template</b></h5>
        <p>
          <a style="color: blue" href="conference-template-a4.docx">click here</a>
          for MsWord Template
          <br>

          <a style="color: blue" href="conference_101719.pdf">click here</a>
          for PDF Template
          <br>
        </p>

      </div>

      <p>&nbsp;</p>

      <p><strong>Paper Submission Deadline:</strong></p>

      <p>
        By submitting the registration documents, the author will receive an email stating the selection for the conference. This email will confirm
        the date for returning your full paper. Please note that this is a FINAL date. Earlier submission is encouraged as it helps the conference
        team to manage the review process in a timely manner.
      </p>

      <p>&nbsp;</p>

      <p><strong>Revision/Rejection:</strong></p>

      <p>
        <strong>Case 1:</strong> If the paper has been suggested for a revision. Author should revise the paper according to the specified reviewer
        comments and the updated paper should be sent back to the conference before the specified final submission deadline for further inline review
        process.
      </p>

      <p>
        <strong>Case 2:</strong> If the paper has plagiarism or if the submitted research work is out of the conference theme, it will be reject
        without suggesting any further revision
      </p>

      <p><strong>Case 3: </strong>The paper can also be rejected due to poor English Standard.</p>

      <p>&nbsp;</p>

      <p class="text-center"><b>GIUAC Copyright Article Submission</b></p>

      <form method="post" action="new2.php" enctype="multipart/form-data">
        <div class="form-input py-2">
        
        <div class="form-group">
        <div class="form-group">
          <input type="text" class="form-control" name="Aname"
              placeholder="Enter the title of the Article" required>
          </div>								
      
          <div class="form-group">
          <input type="text" class="form-control" name="Atname"
              placeholder="Enter the author's name" required>
              </div>
      
              <div class="form-group">
          <input type="text" class="form-control" name="AID"
              placeholder="Enter the Id of Article" required>
              </div>
      
              <div class="form-group">
          <input type="email" class="form-control" name="Atemail"
              placeholder="Enter the author's Email" required>
              </div>

        <label>Attach your Conference Paper: </label>
        <input type="file" class="form-control" name="pdf"
          placeholder="Enter the pdf file" required>
        </div>
        <div class="form-group">
        <input type="submit" class="btnRegister"
          name="submit" value="Submit">
        </div>
        </div>
      </form>
      
      <p>&nbsp;</p>



      <p class="text-center"><b>Payment Submission</b></p>

      <form method="post" action="new1.php" enctype="multipart/form-data">
        <div class="form-input py-2">
        
        <div class="form-group">
        <div class="form-group">
        <div class="form-group">
          <input type="text" class="form-control" name="AID"
              placeholder="Enter the Id of Article" required>
        </div>

        <label>Attach your Conference Paper: </label>
        <div class="form-group">
        <input type="file" class="form-control" name="pdf"
          placeholder="Enter the pdf file" required>
        </div>
        
        <div class="form-group">
        <input type="submit" class="btnRegister"
          name="submit" value="Submit">
        </div>
      </div>
    </form>
      
      <p>&nbsp;</p>



      <p><strong>Presentation Guidelines</strong></p>

      <p>
        If an author has had a paper accepted, the author is expected to give a 15 minute presentation of the work. The presentation shall have 15
        slides or fewer strictly not more than it.
      </p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>
</html>