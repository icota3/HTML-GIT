<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job details</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('images/background.jpg');">
    <div class="container my-5 mx-auto">
        <div class="card mb-5">
            <div class="card-header text-white mb-3">
            Job details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th scope="row">Job name</th>
                                    <td>
                                        <?php 
                                        if (isset($_POST["Job_name"])) {
                                            echo htmlspecialchars($_POST["Job_name"]);
                                        } else {
                                            echo "N/A";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Job offerer</th>
                                    <td>
                                        <?php 
                                        if (isset($_POST["job_offerer"])) {
                                            echo htmlspecialchars($_POST["job_offerer"]);
                                        } else {
                                            echo "N/A";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Offerer number</th>
                                    <td>
                                        <?php 
                                        if (isset($_POST["Offerer_number"])) {
                                            echo htmlspecialchars($_POST["Offerer_number"]);
                                        } else {
                                            echo "N/A";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">City</th>
                                    <td>
                                        <?php 
                                        if (isset($_POST["city"])) {
                                            $selected_cities = $_POST["city"];
                                            $city_names = [
                                                "maribor" => "Maribor",
                                                "ljubljana" => "Ljubljana",
                                                "celje" => "Celje",
                                                "koper" => "Koper"
                                            ];

                                            $city = "";
                                            foreach ($selected_cities as $selected_city) {
                                                if (isset($city_names[$selected_city])) {
                                                    $city .= $city_names[$selected_city] . ", ";
                                                }
                                            }

                                            echo htmlspecialchars(trim($city));
                                        } else {
                                            echo "N/A";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Required age</th>
                                    <td>
                                        <?php 
                                        if (isset($_POST["age"])) {
                                            echo htmlspecialchars($_POST["age"]);
                                        } else {
                                            echo "N/A";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                        <td>
                                            <?php 
                                            if (isset($_POST["Description"])) {
                                                echo htmlspecialchars($_POST["Description"]);
                                            } else {
                                                echo "N/A";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <a href="job_upload_form.php" class="btn btn-outline-dark">Go back</a>
                    </div>
                </div>
                </div>
            </div>
        </div>                          
</body>
</html>