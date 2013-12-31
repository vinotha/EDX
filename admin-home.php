
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/foundation.css" />
        <!-- If you are using the gem version, you need this only -->
        <link rel="stylesheet" href="css/app.css" />
        <link rel ="stylesheet" href ="css/layout.css">
       
        <script src="js/vendor/custom.modernizr.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation/foundation.js"></script>
        <script src="js/foundation/foundation.section.js"></script>
        
        <script src="js/foundation/foundation.reveal.js"></script>
        
        <script>
            document.write('<script src=/js/vendor/'
                    + ('__proto__' in {} ? 'zepto' : 'jquery')
                    + '.js><\/script>');
        </script>
        <script>
            $(document).foundation();
        </script>
        <script>
          $(document).ready(function() {
            $("#all-contents").click(function() {
            $("#all-contents-display").toggle();  
            }
          );
          });
          </script>
    </head>
    <body>
      <header>
        <div class="row">
          <div class="large-8 columns">
            </div>
          <div class="large-4 columns">
            <div class="top-bar-section">
             
               <span>Hai user</span>
   <span><a href="#">Logout</a></span>
                
            </div>
          </div>
          </div>
        <hr>
        </header>
     
      <div class="row">
        <div class="large-3 columns">
         <div class="section-container accordion" data-section="accordion" data-options="one_up:false;">
          
           <section>
             <p class="title" data-section-title><a href="#panel">Create New</a></p>
             <div class="content" data-section-content>
               <ul class="side-nav">
          <li><a href="#">Course</a></li>
          <li><a href="#">Unit</a></li>
          <li><a href="#">Session</a></li>
          <li><a href="#">Quiz</a></li>
          <li><a href="#">Multiple choice question</a></li>
          <li><a href="#">True or False</a></li>
          <li><a href="#">Fill in the blanks</a></li>
          <li><a href="#">Matching</a></li>
          <li class="divider"></li>
          <li><a href="#">Upload Bulk Questions</a></li>
          <li><a href="#">Upload Bulk Users</a></li>
          
          </ul>
               </div>
             </section>
           <section>
             <p class="title" data-section-title><a href="#">View</a></p>
             <div class="content" data-section-content>
               <ul class="side-nav">
                 <li><a id="all-contents" href="#">All Contents</a></li>
                 <li><a href="#">All Users</a></li>
                 </ul>
             </div>
             </section>
           </div>
          </div>
       
        
      <div id="all-contents-display" class="content" style="display:none">
        
          <div class="large-9 columns">
        <table>
          
          <tr>
            <th width="30"></th>
            <th width="700">Title</th>
            <th width="50">Type</th>
            <th width="120">Created on</th>
            <th width="50"></th>
            <th width="50"></th>
            </tr>
            <tr>
              <td></td>
              <td>Cloud Technology</td>
              <td>Course</td>
              <td>Dec 31 2013</td>
              <td><a href="edit">Edit</a></td>
              <td><a href="delete">Delete</a></td>
              </tr>
        </table>
          </div>
          </div>
      </div>
    </body>
</html>