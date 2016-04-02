<h1 class="margin-0">Skeleton MVC</h1>
<p class="margin-0">Sample page</p>
<p>Add two additional parameters to your url to check if url rewrite is working, e.g http://your_url/my_var/my_second_var</p>
<p>Here you will see it displayed:</p>
<?php echo "<p><b>Hello " . $data["name"] . " " . $data["email"] . "</b></p>"; ?>
<p>This MVC has two main functions for database</p>
<ul>
    <li><b>CON::load()->parseStatement($sql)</b> - if you need to get response from database ($sql - your sql statement)</li>
    <li><b>CON::load()->executeStatement($sql)</b> - if you only need to execute sql</li>
</ul>
<p>MVC structure:</p>
<ul>
    <li>root_directory
        <ul>
            <li>index.php, config.php, bootstrap.php</li>
            <li>app (dir)
                <ul>
                    <li>controllers (dir)
                        <ul>
                            <li>all your controllers</li>
                        </ul>
                    </li>
                    <li>core (dir)
                        <ul>
                            <li>app.php</li>
                            <li>controller.php</li>
                        </ul>
                    </li>
                    <li>models (dir)
                        <ul>
                            <li>all your models</li>
                        </ul>
                    </li>
                    <li>views (dir)
                        <ul>
                            <li>all your views</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>css (dir)
                <ul>
                    <li>style.css</li>
                    <li>style.less</li>
                </ul>
            </li>
            <li>js (dir)
                <ul>
                    <li>script.js</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>