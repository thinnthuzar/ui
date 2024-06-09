
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin </title>
    <link rel="stylesheet" href="owne/vendor/vendor/data_table/jquery.dataTables.min.css">
    <link rel="stylesheet" href="owne/vendor/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="owne/vendor/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>

/* Default (light mode) styles */
body {
    background-color: white;
    color: black;
    transition: background-color 0.5s, color 0.5s;
    margin: auto;
}

/* Dark mode styles */
body.dark-mode {
    background-color: black;
    color: black;
}
.aside a:active{
    background-color: white;
    color: black;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 20px
    margin-right:-20px;
}

</style>


</head>
<body class="center" data-bs-theme="dark">
<div class="container_fluid">

            <div class="row  pt-0 d-flex w-100" style="margin-left:50px">
                @include('aside')
                <div class="col-12 col-md-8   m-0" style="padding: 0px">


                    <div class="   d-flex px-3 justify-content-end align-items-center" style="height:60px;background-color:#FF0000 ">

                            <form action="" class="search d-flex" style="margin-bottom: 3px;
                            ">
                                <input type="text" class="form-control " name="message" placeholder="something">
                                <button class="btn btn-rounded bg-white ml-2"><i class="feather feather-search"></i></button>
                            </form>

                            <button  id="dark-mode-toggle" class="ml-2 p-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                                    <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                                  </svg>
                            </button>

                    </div>
                    <div class="col-12 bg-light py-2">







