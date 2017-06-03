<?php
    //session_start();

    if(!$_SESSION["inicio"]){
        header("location:index.php?action=login");
        
        exit();
    }
?>
   

   <div class="columns">
    <aside class="column is-2 aside menu is-hidden-mobile">
        <div class="menu-space">
            <p class="menu-label">General</p>
            <ul class="menu-list">
                <li>
                    <a><span class="icon"><i class="typcn typcn-typcn typcn-chevron-right"></i></span>General</a>
                </li>
                <li>
                    <a><span class="icon"><i class="typcn typcn-chevron-right"></i></span>Actividades</a>
                </li>
                <li>
                    <a><span class="icon"><i class="typcn typcn-chevron-right"></i></span>Linea de Tiempo</a>
                </li>
                <li>
                    <a><span class="icon"><i class="typcn typcn-chevron-right"></i></span>Clientes</a>
                </li>
                <li>
                    <a><span class="icon"><i class="typcn typcn-chevron-right"></i></span>Cuentas</a>
                </li>
                <li>
                    <a><span class="icon"><i class="typcn typcn-chevron-right"></i></span>Servicios</a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="column is-10 admin-panel">
        <section class="hero is-small">
            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Administración
                    </h1>
                    <h2 class="subtitle">
                        subtitulo
                    </h2>
                </div>
            </div>

            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <p class="heading">Tweets</p>
                        <p class="title">3,456</p>
                    </div>
                    <div class="level-item has-text-centered">
                        <p class="heading">Following</p>
                        <p class="title">123</p>
                    </div>
                    <div class="level-item has-text-centered">
                        <p class="heading">Followers</p>
                        <p class="title">456K</p>
                    </div>
                    <div class="level-item has-text-centered">
                        <p class="heading">Likes</p>
                        <p class="title">789</p>
                    </div>
                </nav>
            </div>
        </section>
        <section class="section">
            <div class="columns is-desktop is-multiline">
                <div class="column is-one-third-desktop is-full-tablet">
                    <section class="panel">
                        <p class="panel-heading">
                            Total Users
                        </p>
                        <p class="panel-tabs">
                            <a class="is-active" href="#">All Time</a>
                            <a href="#">Past week</a>
                            <a href="#">Past month</a>
                            <a href="#">Past quarter</a>
                            <a href="#">Past Year</a>
                        </p>
                        <div class="panel-block">
                            <div id="chart1" style="height: 250px;"></div>
                        </div>
                        <div class="panel-block">
                            <button class="button is-primary is-outlined is-fullwidth">
                  View Data
                </button>
                        </div>
                    </section>
                </div>
                <div class="column is-one-third-desktop is-full-mobile">
                    <section class="panel">
                        <p class="panel-heading">
                            Sales
                        </p>
                        <div class="panel-block">
                            <div id="chart2" style="height: 280px;"></div>
                        </div>
                        <div class="panel-block">
                            <button class="button is-primary is-outlined is-fullwidth">
                  View Data
                </button>
                        </div>
                    </section>
                </div>
                <div class="column is-one-third-desktop is-full-mobile">
                    <section class="panel">
                        <p class="panel-heading">
                            YoY Comparison
                        </p>
                        <div class="panel-block">
                            <div id="chart3" style="height: 280px;"></div>
                        </div>
                        <div class="panel-block">
                            <button class="button is-primary is-outlined is-fullwidth">
                  View Data
                </button>
                        </div>
                    </section>
                </div>
                <div class="column is-half-desktop is-full-mobile">
                    <section class="panel">
                        <p class="panel-heading">
                            Notifications
                        </p>
                        <div class="panel-block">
                            <div class="notification is-warning">
                                <button class="delete" onclick="((this).parentNode.remove())"></button>
                                <strong>Server 101a is at 90% disk capacity.</strong>
                                <br>
                                <small>1h ago | via: system</small>
                            </div>
                            <div class="notification">
                                <button class="delete" onclick="((this).parentNode.remove())"></button>
                                <strong>Cron job successfully completed.</strong>
                                <br>
                                <small>2h ago | via: system</small>
                            </div>
                            <div class="notification">
                                <button class="delete" onclick="((this).parentNode.remove())"></button>
                                <strong>Completed automated backup.</strong>
                                <br>
                                <small>1d ago | via: system</small>
                            </div>
                            <div class="notification">
                                <button class="delete" onclick="((this).parentNode.remove())"></button>
                                <strong>Security scan complete. 0 exceptions found.</strong>
                                <br>
                                <small>1d ago | via: system</small>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column is-half-desktop is-full-mobile">
                    <section class="panel">
                        <p class="panel-heading">
                            Forecast
                        </p>
                        <div class="panel-block">
                            <div id="chart5" style="height: 280px;"></div>
                        </div>
                    </section>
                </div>
                <div class="column is-half-desktop is-full-mobile">
                    <section class="panel">
                        <p class="panel-heading">
                            Popular Followers
                        </p>
                        <div class="panel-block">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Instrument</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Instrument</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Misty Abbott</td>
                                        <td>Bass Guitar</td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Rhythm Guitar</td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Robert Mikels</td>
                                        <td>Lead Guitar</td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Karyn Holmberg</td>
                                        <td>Drums</td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </td>
                                        <td class="is-icon">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <section class="panel">
                        <p class="panel-heading">
                            Message User
                        </p>
                        <div class="panel-block">
                            <label class="label">Name</label>
                            <p class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </p>
                            <label class="label">Username</label>
                            <p class="control has-icon has-icon-right">
                                <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                                <i class="fa fa-check"></i>
                                <span class="help is-success">This username is available</span>
                            </p>
                            <label class="label">Email</label>
                            <p class="control has-icon has-icon-right">
                                <input class="input is-danger" type="text" placeholder="Email input" value="hello@">
                                <i class="fa fa-warning"></i>
                                <span class="help is-danger">This email is invalid</span>
                            </p>
                            <label class="label">Subject</label>
                            <p class="control">
                                <span class="select">
                <select>
                  <option>Select dropdown</option>
                  <option>With options</option>
                </select>
              </span>
                            </p>
                            <label class="label">Message</label>
                            <p class="control">
                                <textarea class="textarea" placeholder="Textarea"></textarea>
                            </p>
                            <p class="control">
                                <label class="checkbox">
                <input type="checkbox">
                Remember me
              </label>
                            </p>
                            <p class="control">
                                <label class="radio">
                <input type="radio" name="question">
                Yes
              </label>
                                <label class="radio">
                <input type="radio" name="question">
                No
              </label>
                            </p>
                            <p class="control">
                                <button class="button is-primary">Submit</button>
                                <button class="button is-link">Cancel</button>
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>