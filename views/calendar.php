<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tasty Recipes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/calendar.css">
</head>
<body>
        <?php include("resources/SharedViewParts/logoAndTopOfMenu.php"); ?>
                <form action="FirstPage">
                    <input type="submit" value="Featured recipes" />
                </form>
            </div>
        </div>

	<div id="calendar-wrap">
            <header>
                <h1>November 2018</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Sunday</li>
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                </ul>

                <!-- Days from previous month -->

                <ul class="days">
                    <li class="day other-month">
                        <div class="date">27</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">28</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">29</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">30</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">31</div>
                    </li>

                    <!-- Days in current month -->

                    <li class="day">
                        <div class="date">1</div>
                    </li>
                    <li class="day">
                        <div class="date">2</div>
                        <div class="recipe">
                            <div class="recipe-desc">
                              <a href="recipeMeatballs"><img src="../../resources/meatballs.jpg" alt="A picture of meatballs served with delicious mashed potatoes"></a>
                            </div>
                            <div id="event-time">
                                Delicious meatballs!
                            </div>
                        </div>
                    </li>
                </ul>

                    <!-- Row #2 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">3</div>
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                    </li>
                    <li class="day">
                        <div class="date">5</div>
                    </li>
                    <li class="day">
                        <div class="date">6</div>
                    </li>
                    <li class="day">
                        <div class="date">7</div>
												<div class="recipe">
														<div class="recipe-desc">
															<a href="recipePancakes"><img src="../../resources/pancakes.jpg" alt="A picture of a stack of pancakes with 2 sausages charmingly placed on top"></a>
														</div>
														<div id="event-time">
																Hidden sausage pancakes!
														</div>
												</div>
                    </li>
                    <li class="day">
                        <div class="date">8</div>
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                    </li>
                </ul>

                    <!-- Row #3 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">10</div>
                    </li>
                    <li class="day">
                        <div class="date">11</div>
                    </li>
                    <li class="day">
                        <div class="date">12</div>
                    </li>
                    <li class="day">
                        <div class="date">13</div>
                    </li>
                    <li class="day">
                        <div class="date">14</div>
                    </li>
                    <li class="day">
                        <div class="date">15</div>
                    </li>
                    <li class="day">
                        <div class="date">16</div>
                    </li>
                </ul>

                    <!-- Row #4 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">17</div>
                    </li>
                    <li class="day">
                        <div class="date">18</div>
                    </li>
                    <li class="day">
                        <div class="date">19</div>
                    </li>
                    <li class="day">
                        <div class="date">20</div>
                    </li>
                    <li class="day">
                        <div class="date">21</div>
                    </li>
                    <li class="day">
                        <div class="date">22</div>
                    </li>
                    <li class="day">
                        <div class="date">23</div>
                    </li>
                </ul>

                        <!-- Row #5 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">24</div>
                    </li>
                    <li class="day">
                        <div class="date">25</div>
                    </li>
                    <li class="day">
                        <div class="date">26</div>
                    </li>
                    <li class="day">
                        <div class="date">27</div>
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                    </li>
                    <li class="day">
                        <div class="date">29</div>
                    </li>
                    <li class="day">
                        <div class="date">30</div>
                    </li>
                </ul>

                <!-- Row #6 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">31</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">1</div> <!-- Next Month -->
                    </li>
                    <li class="day other-month">
                        <div class="date">2</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">3</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">4</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">5</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">6</div>
                    </li>
                </ul>

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->
        <?php include("login.php"); ?>
</body>
</html>
