<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>
    Academia - Teacher Homepage
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<style type="text/css">
        
tbody th {
  background-color: #36c;
  color: #fff;
  text-align: left;
  padding: 25px;
  border: black 2px solid;
}

tbody tr:nth-child(even) th {
  background-color: #25c;
  padding: 25px;
}
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData4()
{
   var divToPrint=document.getElementById("printTable4");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData5()
{
   var divToPrint=document.getElementById("printTable5");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData6()
{
   var divToPrint=document.getElementById("printTable6");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <span>
            Academia
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonial">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="">
              <span>
            <x-app-layout></x-app-layout>
              </span>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome Teacher <br>
                        <?php echo Auth::user()->name; ?>
                      </h1>
                      <p>
                        Consider us as your child's educational partner!
                      </p>
                      <a href="#contact">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/home4.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome Teacher <br>
                         <?php echo Auth::user()->name; ?>
                      </h1>
                      <p>
                        Consider us as your child's educational partner!
                      </p>
                      <a href="#contact">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/home4.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome Teacher <br>
                         <?php echo Auth::user()->name; ?>
                      </h1>
                      <p>
                       Consider us as your child's educational partner!
                      </p>
                      <a href="#contact">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/home4.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- saving section -->

<br>
<br>
<br>

  <section class="saving_section " id="about">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="images/home5.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About <br>
                  Us
                </h2>
              </div>
              <p>
              Welcome to Academia where we provide a high-quality education to students of all ages. Established in 2020, we have a long history of academic excellence and a strong commitment to shaping the next generation of leaders.
                        <br>
                        <br>
                     At Academia, we believe in fostering a love of learning in our students through a well-rounded curriculum that includes core subjects such as math, science, and language arts, as well as electives in the arts, athletics, and technology. We have dedicated and highly qualified teachers who are passionate about their subjects and committed to helping their students succeed.
                        <br>
                        <br>
                     We welcome you to visit our campus and see firsthand the amazing things happening at Academia. Thank you for considering us as your child's educational partner.
              </p>
              <div class="btn-box">
                <a href="#mod" class="btn2">
                  My Module
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<br>
<br>
  <!-- end saving section -->

  <!-- contact section -->

  <section class="contact_section " id="mod">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          My Module
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <form action="{{ url('add_report') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Add a Report</label>                
            </div>
            <br>
            <div>
              <input type="text" placeholder="Report Name" id="name" name="name" required />
              <input type="hidden" value="<?php echo Auth::user()->name; ?>" name="teacher" id="teacher" required>
              <input type="hidden" value="<?php echo Auth::user()->subject; ?>" name="subject"  id="subject" required> 
            </div>
            <div>
                 <select id="par" name="par" required>
                                     <option value="" selected disabled>Select A Parent</option>
                                     <?php
                                      $con = mysqli_connect("localhost","root","","intergrated_school_system");
                                      $sql = "SELECT * FROM `users` WHERE `user_type` = '2'";
                                      $all_categories = mysqli_query($con,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                      <option value="<?php echo $category["id"];?>">
                                          <?php echo $category["name"];
                                          ?>
                                      </option>
                                  <?php
                                      endwhile;
                                  ?>
                                    </select>              
            </div>
            <br>
            <div>
                <input type="file" name="pdf" accept=".pdf" required>
            </div>
            <div class="d-flex ">
              <button type="submit">
                ADD
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
                    <form action="{{ url('add_assignment') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Add an Assignment</label>                
            </div>
            <br>
            <div>
              <input type="text" placeholder="Assignment Name" id="name" name="name" required />
              <input type="hidden" value="<?php echo Auth::user()->id; ?>" name="teacher" id="teacher" required>
              <input type="hidden" value="<?php echo Auth::user()->subject; ?>" name="subject"  id="subject" required> 
            </div>
        
            <div>
                <input type="file" name="pdf" accept=".pdf" required>
            </div>
                        <div>
              <input type="date" min="<?php echo date('Y-m-d'); ?>" name="day" id="day" required />
            </div>
            <div class="d-flex ">
              <button type="submit">
                ADD
              </button>
            </div>
          </form>
        </div>
        <div class="row">
                    <div class="col-md-7 col-lg-12 px-0">
          <form action="{{ url('send_announcement') }}" method="post">
            @csrf
            <div>
                <label>Send an Announcement</label>           
            </div>
            <br>
            <div>
              <input type="text" placeholder="Title" id="title" name="title" required />
              <input type="hidden" value="<?php echo Auth::user()->name; ?>" name="teacher" id="teacher" required>
              <input type="hidden" value="<?php echo Auth::user()->subject; ?>" name="subject"  id="subject" required>              
            </div>
            <div>
             <div>
              <input type="text" class="message-box" placeholder="Message" name="message" id="message" required />
            </div>
            </div>
            <div class="d-flex ">
              <button type="submit">
                SEND
              </button>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h3>Announcements</h3>
      </div>
    </div>
    <div class="container px-0">
            <div class="box">
                 <table id="printTable">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Announcement ID</th>
                <th style="text-align: left;
                  padding: 8px;">Title</th>
                <th style="text-align: left;
                  padding: 8px;">Message</th>
                <th style="text-align: left;
                  padding: 8px;">Subject</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;"></th>
                </tr>
                @foreach($announcement_store as $announcements)
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$announcements->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$announcements->title}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$announcements->message}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$announcements->subject}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$announcements->created_at}}</td>
                              <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_announcement',$announcements->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Announcement ?')">Delete Announcement</a></td>
                </tr>
                @endforeach
                </table>
                <br>
                 <a onclick="printData();" class="btn btn-primary px-4 mx-auto mb-4">Print</a>
            </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h3>
          Reports
        </h3>
      </div>
    </div>
    <div class="container px-0">
            <div class="box">
                <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Report ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Subject</th>
                <th style="text-align: left;
                  padding: 8px;">PDF File</th>                
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;"></th>
                </tr>
                @foreach($report_store as $reports)
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$reports->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$reports->name}}</td>                  
                <td style="text-align: left;
                  padding: 8px;">{{$reports->subject}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="pdf/{{$reports->pdf_path}}" title="{{$reports->name}}" target="_blank" download>Download</a></td>   
                <td style="text-align: left;
                  padding: 8px;">{{$reports->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_report',$reports->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Report ?')">Delete Report</a></td>
                </tr>
                @endforeach
                </table>
                <br>
                 <a onclick="printData1();" class="btn btn-primary px-4 mx-auto mb-4">Print</a>
            </div>
               <div class="container">
      <div class="heading_container heading_center">
        <h3>
        Students
        </h3>
      </div>
    </div>
    <div class="container px-0">
            <div class="box">
                <table id="printTable2">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Parent ID</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>                 
                </tr>
                @foreach($student_store as $students)
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$students->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->parent_id}}</td>                  
                <td style="text-align: left;
                  padding: 8px;">{{$students->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><img src="images/{{$students->profile_photo_path}}" title="{{$students->profile_photo_path}}" width = '150px'></td>
                </tr>
                @endforeach
                </table>
                <br>
                 <a onclick="printData2();" class="btn btn-primary px-4 mx-auto mb-4">Print</a>
            </div>
               <div class="container">
      <div class="heading_container heading_center">
        <h3>
          Assignments
        </h3>
      </div>
    </div>
    <div class="container px-0">
            <div class="box">
                 <table id="printTable3">
                <tr style="text-align: left;
                  padding: 8px;">                
                <th style="text-align: left;
                  padding: 8px;">Assignment ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Subject</th>                  
                <th style="text-align: left;
                  padding: 8px;">PDF File</th>
                <th style="text-align: left;
                  padding: 8px;">Date Due</th>
                <th style="text-align: left;
                  padding: 8px;">Status</th>                                    
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;"></th>
                  <th style="text-align: left;
                  padding: 8px;"></th>                  
                </tr>
                @foreach($assignment_store as $assignments)
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$assignments->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$assignments->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$assignments->subject}}</td>                  
                <td style="text-align: left;
                  padding: 8px;"><a href="pdf/{{$assignments->pdf_path}}" title="{{$assignments->name}}" target="_blank" download>Download</a></td>
                <td style="text-align: left;
                  padding: 8px;">{{$assignments->date_due}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$assignments->status}}</td>                                      
                <td style="text-align: left;
                  padding: 8px;">{{$assignments->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_assignment',$assignments->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Assignment ?')">Delete Assignment</a></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('complete_assignment',$assignments->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Complete This Assignment ?')">Complete Assignment</a></td>
                </tr>
                @endforeach
                </table>
                <br>
                 <a onclick="printData3();" class="btn btn-primary px-4 mx-auto mb-4">Print</a>
            </div>
               <div class="container">
      <div class="heading_container heading_center">
        <h3>
          Submissions
        </h3>
      </div>
    </div>
    <div class="container px-0">
            <div class="box">
                 <table id="printTable4">
                <tr style="text-align: left;
                  padding: 8px;">                
                <th style="text-align: left;
                  padding: 8px;">Submission ID</th>
                <th style="text-align: left;
                  padding: 8px;">Assignment ID</th>  
               <th style="text-align: left;
                  padding: 8px;">Parent ID</th>                  
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Status</th>                  
                <th style="text-align: left;
                  padding: 8px;">PDF File</th>                  
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;"></th>
                </tr>
                @foreach($submission_store as $submissions)
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$submissions->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$submissions->assignment_id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$submissions->parent_id}}</td>                  
                <td style="text-align: left;
                  padding: 8px;">{{$submissions->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$submissions->status}}</td>                  
                <td style="text-align: left;
                  padding: 8px;"><a href="pdf/{{$submissions->pdf_path}}" title="{{$submissions->name}}" target="_blank" download>Download</a></td>                   
                <td style="text-align: left;
                  padding: 8px;">{{$submissions->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('grade_submission',$submissions->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Grade This Submission ?')">Grade Submission</a></td>
                </tr>
                @endforeach
                </table>
                <br>
                 <a onclick="printData4();" class="btn btn-primary px-4 mx-auto mb-4">Print</a>
            </div>
  </section>
  <!-- end client section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top" id="contact">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <h6>
              ABOUT US
            </h6>
            <p>
              We believe that education is not just about memorizing facts, but about developing critical thinking skills, fostering creativity, and building self-confidence. That's why we create an environment that promotes individual development and encourages students to take risks and strive for their personal best.            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Nairobi, KENYA. </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+254 799 566438</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> academia@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>