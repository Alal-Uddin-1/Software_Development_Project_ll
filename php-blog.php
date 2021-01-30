<?php include('header.php');?>
    <div class="blog-section">
        <div class="container">
            <div class="row py-5 m-auto text-center">
                <div class="col">
                    <h2 class='text-primary'>Our Php All blogs</h2>
                </div>
            </div>
            <div class="row py-5 bg-light">
                <div class="col-md-3">
                    <div class="list">
                        <ul>
                            <li><a href='#'>Variable</a></li>
                            <li><a href='#'>loop</a></li>
                            <li><a href='#'>conditionals</a></li>
                            <li><a href='#'>array</a></li>
                            <li><a href='#'>string</a></li>
                            <li><a href='#'>function</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row text-center py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <img class="card-img-top img-fluid " src="img/php-1.jpg" alt="Card image cap">
                                <p>30 january 2021</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p><span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<span id="dots">...</span><span id="more1">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.</span></p>
                            <button onclick="myFunction1()" id="myBtn1">Read more</button>
                                <script>
                                    function myFunction1() {
                                        var dots = document.getElementById("dots");
                                        var moreText = document.getElementById("more1");
                                        var btnText = document.getElementById("myBtn1");
                                    
                                        if (dots.style.display === "none") {
                                        dots.style.display = "inline";
                                        btnText.innerHTML = "Read more"; 
                                        moreText.style.display = "none";
                                        } else {
                                        dots.style.display = "none";
                                        btnText.innerHTML = "Read less"; 
                                        moreText.style.display = "inline";
                                        }
                                    }
                                </script>
                        </div>
                    </div>

                    <div class="row text-center py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <img class="card-img-top img-fluid " src="img/php-2.jpg" alt="Card image cap">
                                <p>30 january 2021</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                        <p><span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<span id="dots">...</span><span id="more2">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.</span></p>
                            <button onclick="myFunction2()" id="myBtn2">Read more</button>
                                <script>
                                    function myFunction2() {
                                        var dots = document.getElementById("dots");
                                        var moreText = document.getElementById("more2");
                                        var btnText = document.getElementById("myBtn2");
                                    
                                        if (dots.style.display === "none") {
                                        dots.style.display = "inline";
                                        btnText.innerHTML = "Read more"; 
                                        moreText.style.display = "none";
                                        } else {
                                        dots.style.display = "none";
                                        btnText.innerHTML = "Read less"; 
                                        moreText.style.display = "inline";
                                        }
                                    }
                                </script>
                        </div>
                    </div>

                    <div class="row text-center py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <img class="card-img-top img-fluid " src="img/php-3.jpg" alt="Card image cap">
                                <p>30 january 2021</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                        <p><span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<span id="dots">...</span><span id="more3">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.</span></p>
                            <button onclick="myFunction3()" id="myBtn3">Read more</button>
                                <script>
                                    function myFunction3() {
                                        var dots = document.getElementById("dots");
                                        var moreText = document.getElementById("more3");
                                        var btnText = document.getElementById("myBtn3");
                                    
                                        if (dots.style.display === "none") {
                                        dots.style.display = "inline";
                                        btnText.innerHTML = "Read more"; 
                                        moreText.style.display = "none";
                                        } else {
                                        dots.style.display = "none";
                                        btnText.innerHTML = "Read less"; 
                                        moreText.style.display = "inline";
                                        }
                                    }
                                </script>
                        </div>
                    </div>

                    <div class="row text-center py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <img class="card-img-top img-fluid " src="img/php-1.jpg" alt="Card image cap">
                                <p>30 january 2021</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                        <p><span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<span id="dots">...</span><span id="more4">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.</span></p>
                            <button onclick="myFunction4()" id="myBtn4">Read more</button>
                                <script>
                                    function myFunction4() {
                                        var dots = document.getElementById("dots");
                                        var moreText = document.getElementById("more4");
                                        var btnText = document.getElementById("myBtn4");
                                    
                                        if (dots.style.display === "none") {
                                        dots.style.display = "inline";
                                        btnText.innerHTML = "Read more"; 
                                        moreText.style.display = "none";
                                        } else {
                                        dots.style.display = "none";
                                        btnText.innerHTML = "Read less"; 
                                        moreText.style.display = "inline";
                                        }
                                    }
                                </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>