<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
?>

<!----------------------------- Main Site Section ------------------------------>

<main>

    <!------------------------ Site Title ----------------------

    <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <h3>Tours & Travels</h3>
            <h1>Amazing Place on Earth</h1>
            <button class="btn">Explore</button>
        </div>
    </section>

    ----------x----------- Site Title ----------x----------->

    <!-- --------------------- Blog Carousel ----------------- -->

    <!-- <section>
        <div class="blog">
            <div class="container">
                <div class="owl-carousel owl-theme blog-post">
                    <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-1.jpg" alt="post-1">
                        <div class="blog-title">
                            <h3>R.S.R Painting continued the evolution</h3>
                            <button class="btn btn-blog">Read More</button>
                            <span>1 minutes</span>
                        </div>
                    </div>
                    <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-3.jpg" alt="post-1">
                        <div class="blog-title">
                            <h3>R.S.R Painting continued the evolution</h3>
                            <button class="btn btn-blog">Read More</button>
                            <span>2 minutes</span>
                        </div>
                    </div>
                    <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-2.jpg" alt="post-1">
                        <div class="blog-title">
                            <h3>R.S.R Painting Continued the evolution</h3>
                            <button class="btn btn-blog">Read More</button>
                            <span>3 minutes</span>
                        </div>
                    </div>
                    <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-5.png" alt="post-1">
                        <div class="blog-title">
                            <h3>R.S.R Painting Continued the evolution</h3>
                            <button class="btn btn-blog">Read More</button>
                            <span>4 minutes</span>
                        </div>
                    </div>
                </div>
                <div class="owl-navigation">
                    <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                    <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ----------x---------- Blog Carousel --------x-------- -->

    <!-- ---------------------- Site Content -------------------------->

    <section class="container">
        <div class="site-content">
            <div class="posts">
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./assets/Blog-post/blog1.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;October 10,2020</span>
                            <span>0 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">Why should boys have all the fun? it's the women who are making india an
                            alcohol-loving contry</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                            adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                            nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                            illum similique veniam tempore unde?
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <!-- <hr>
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./assets/Blog-post/blog2.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;October 10,2020</span>
                            <span>0 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">Why should boys have all the fun? it's the women who are making india an
                            alcohol-loving contry</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                            adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                            nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                            illum similique veniam tempore unde?
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div> -->
                <!-- <hr>
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./assets/Blog-post/blog3.png" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 19, 2019</span>
                            <span>5 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                            adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                            nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                            illum similique veniam tempore unde?
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div> -->
                <!-- <hr>
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./assets/Blog-post/blog4.png" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 21, 2019</span>
                            <span>12 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                            adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                            nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                            illum similique veniam tempore unde?
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div> -->
                <!-- <div class="pagination flex-row">
                    <a href="#"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="pages">1</a>
                    <a href="#" class="pages">2</a>
                    <a href="#" class="pages">3</a>
                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                </div> -->
            </div>
            <aside class="sidebar">
                <div class="category">
                    <h2>Category</h2>
                    <ul class="category-list">
                        <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                            <a href="#"></a>
                            <span>(05)</span>
                        </li>
                    </ul>
                </div>
                <div class="popular-post">
                    <h2>Popular Post</h2>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;April 12,
                                    2021</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-2.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                </div>
                <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                    <h2>Newsletter</h2>
                    <div class="form-element">
                        <input type="text" class="input-element" placeholder="Email">
                        <button class="btn form-btn">Subscribe</button>
                    </div>
                </div>
                <div class="popular-tags">
                    <h2>Popular Tags</h2>
                    <div class="tags flex-row">
                        <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="300">travel</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="400">illustration</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="500">design</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="600">lifestyle</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="700">love</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="800">project</span>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <!-- -----------x---------- Site Content -------------x------------>

</main>

<!---------------x------------- Main Site Section ---------------x-------------->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>