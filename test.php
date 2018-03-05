<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#showdiv").click(function () {
         $("#hiddendiv").show();
      });
    });
   </script>

</head>
<body>
<a href="javascript: void(0)" id="showdiv">Show the Div</a>
<div id="hiddendiv" style="display:none;">Content here</div>
</body>
</html>
