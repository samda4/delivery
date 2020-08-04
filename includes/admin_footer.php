
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-material-design.min.js"></script>
        <script src="js/perfect-scrollbar.jquery.min.js"></script>
        <script src="js/material-dashboard.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        
        <script>ClassicEditor.create(document.getElementById('comment'));</script>
        <script>document.getElementById('datePicker').valueAsDate = new Date();</script>
        <script>
            function myFunction() {
            var x = document.getElementById("top").checked;
            if(x==true){
                x=1;
            }
            else{
                x=0;
            }
            document.getElementById("top").value = x;
            }
            </script>
    </body>
</html>