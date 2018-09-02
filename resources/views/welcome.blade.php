<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css">
    

    <!-- Title -->
    <title>Secure Cloud Based Hospital Management System</title>

</head>

<body>

    <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1 class="display-3">Hospital Management System</h1>
                    <p>We are committed to strong security and safeguarding your medical records. Access all your medical
                        records any time any where with hundred percent security.</p>

                    <form action="{{ url('login') }}" method="POST" class="form-inline m-auto">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="text" class="form-control form-control-lg" placeholder="jane.doe@example.com" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control form-control-lg" placeholder="*****" name="password" required>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-success btn-lg">okay, go!</button>
                    </form>

                    <br>

                    <a href="#about" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="section-content">
            <div class="container">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3>About Us</h3>
                        <p class="lead">We are a team of IT post-graduation students with different specialisation. We have
                            undertaken this project to gain hands on experience on today’s technologies so that we can be
                            fully prepared for job market. </p>
                        <p>We thank Melbourne Institute of Technology so much for the opportunity to work together as a team.
                            We have greatly enjoyed working on this project and look forward to clear this subject with good
                            grades.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="technologies">
        <div class="section-content">
            <div class="container">

                <h3>Technologies Used</h3>
                <p class="lead">We take great pride in using the most advanced technologies available! We believe our precise
                    combination of knowledge, skill and revolutionary technologies enables us to deliver optimum results
                    for this project.
                </p>

                <hr>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card-columns">

                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">PHP</h4>
                                <p class="card-text">PHP is a server scripting language, and a powerful tool for making dynamic
                                    and interactive Web pages.</p>
                                <p class="card-text">
                                    <small class="text-muted">Backend Technology</small>
                                </p>
                            </div>
                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">Laravel</h4>
                                <p class="card-text">Laravel is a free, open-source PHP web framework, intended for the development
                                    of web applications following the model–view–controller architectural pattern.</p>
                                <p class="card-text">
                                    <small class="text-muted">Backend Technology</small>
                                </p>
                            </div>
                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">Jquery, Javascript</h4>
                                <p class="card-text">JQuery is a cross-platform JavaScript library designed to simplify the
                                    client-side scripting of HTML.</p>
                                <p class="card-text">
                                    <small class="text-muted">Frontend Technology</small>
                                </p>
                            </div>
                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">MySql</h4>
                                <p class="card-text">MySQL is the world’s most popular open source database, enabling the
                                    cost-effective delivery of reliable and scalable Web-based and embedded database applications.</p>
                                <p class="card-text">
                                    <small class="text-muted">Database</small>
                                </p>
                            </div>
                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">Android</h4>
                                <p class="card-text">Android is a mobile operating system, designed primarily for touchscreen
                                    mobile devices such as smartphones and tablets.</p>
                                <p class="card-text">
                                    <small class="text-muted">Mobile Technology</small>
                                </p>
                            </div>
                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">AWS - Cloud</h4>
                                <p class="card-text">AWS that provides reliable, secure, on-demand cloud computing platforms to individuals, companies and governments, on a paid subscription basis.</p>
                                <p class="card-text">
                                    <small class="text-muted">Cloud Technology</small>
                                </p>
                            </div>

                        </div>

                        <hr>



                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- jQuery first, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>