<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP & For Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>
    <div class = "col">
        <h1 class = "mt-3 mb-3">Company Catalog</h1>
    </div>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
    </div>


    <?php 
        function getUsers(){
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }
        $users = getUsers();

        for ($i = 0; $i < count ($users); $i ++){
            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
                echo '<div class="col">';
                echo '<div class="card">';
                echo '<img src="..." class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Card title</h5>';
                    echo '<p class="card-text">This is a longer card with supporting text below 
                    as a natural lead-in to additional content. This content is a little bit longer.</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                
                echo '<div class="col">';
                echo '<div class="card">';
                echo '<img src="..." class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Card title</h5>';
                    echo '<p class="card-text">This is a longer card with supporting text below 
                    as a natural lead-in to additional content. This content is a little bit longer.</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '<div class="col">';
                echo '<div class="card">';
                echo '<img src="..." class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Card title</h5>';
                    echo '<p class="card-text">This is a longer card with supporting text below 
                    as a natural lead-in to additional content. This content is a little bit longer.</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            echo '</div>';

        }
        

        echo '<pre>';
        echo print_r ($users);
        echo '</pre>';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>

</body>
</html>