@extends('app')

@section('body-class', 'guides')

@section('content')

<section class="hero">
    <div class="container">
        <div class="content">
            <h1>How to build a todo List with Laravel</h1>
        </div>
    </div>
</section>

<section>
    <div class="docs guide">
        <article>
        <ul>
        <li><a href="#installation">Installation</a>
        <ul>
        <li><a href="#server-requirements">Server Requirements</a></li>
        <li><a href="#installing-laravel">Installing Laravel</a></li>
        <li><a href="#configuration">Configuration</a></li>
        </ul></li>
        <li><a href="#web-server-configuration">Web Server Configuration</a>
        <ul>
        <li><a href="#pretty-urls">Pretty URLs</a></li>
        </ul></li>
        </ul>
        <p><a name="installation"></a></p>
        <h2><a href="#installation">Installation</a></h2>
        
        <blockquote class="has-icon video">
<p><div class="flag"><span class="svg"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" version="1.1" x="0px" y="0px" width="68.9px" height="59.9px" viewBox="0 0 68.9 59.9" enable-background="new 0 0 68.9 59.9" xml:space="preserve"><path fill="#FFFFFF" d="M63.7 0H5.3C2.4 0 0 2.4 0 5.3v49.3c0 2.9 2.4 5.3 5.3 5.3h58.3c2.9 0 5.3-2.4 5.3-5.3V5.3C69 2.4 66.6 0 63.7 0zM5.3 4h58.3c0.7 0 1.3 0.6 1.3 1.3V48H4V5.3C4 4.6 4.6 4 5.3 4zM13 52v4h-2v-4H13zM17 52h2v4h-2V52zM23 52h2v4h-2V52zM29 52h2v4h-2V52zM35 52h2v4h-2V52zM41 52h2v4h-2V52zM4 54.7V52h3v4H5.3C4.6 56 4 55.4 4 54.7zM63.7 56H47v-4h18v2.7C65 55.4 64.4 56 63.7 56zM26 38.7c0.3 0.2 0.7 0.3 1 0.3 0.4 0 0.7-0.1 1-0.3l17-10c0.6-0.4 1-1 1-1.7s-0.4-1.4-1-1.7l-17-10c-0.6-0.4-1.4-0.4-2 0s-1 1-1 1.7v20C25 37.7 25.4 38.4 26 38.7zM29 20.5L40.1 27 29 33.5V20.5z"></path></svg></span></div> Are you a visual learner? Laracasts provides a <a href="https://laracasts.com/series/laravel-from-scratch-2017">free, thorough introduction to Laravel</a> for newcomers to the framework. It's a great place to start your journey.</p>
</blockquote>

        <p><a name="server-requirements"></a></p>
        <h3>Server Requirements</h3>
        <p>The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the <a href="/docs/5.4/homestead">Laravel Homestead</a> virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.</p>
        <p>However, if you are not using Homestead, you will need to make sure your server meets the following requirements:</p>
        <div class="content-list">
        <ul>
        <li>PHP &gt;= 5.6.4</li>
        <li>OpenSSL PHP Extension</li>
        <li>PDO PHP Extension</li>
        <li>Mbstring PHP Extension</li>
        <li>Tokenizer PHP Extension</li>
        <li>XML PHP Extension</li>
        </ul>
        </div>
        <p><a name="installing-laravel"></a></p>
        <h3>Installing Laravel</h3>
        <p>Laravel utilizes <a href="https://getcomposer.org">Composer</a> to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.</p>
        <h4>Via Laravel Installer</h4>
        <p>First, download the Laravel installer using Composer:</p>
        <pre class=" language-php"><code class=" language-php">composer <span class="token keyword">global</span> <span class="token keyword">require</span> <span class="token string">"laravel/installer"</span></code></pre>
        <p>Make sure to place the <code class=" language-php"><span class="token variable">$HOME</span><span class="token operator">/</span><span class="token punctuation">.</span>composer<span class="token operator">/</span>vendor<span class="token operator">/</span>bin</code> directory (or the equivalent directory for your OS) in your $PATH so the <code class=" language-php">laravel</code> executable can be located by your system.</p>
        <p>Once installed, the <code class=" language-php">laravel <span class="token keyword">new</span></code> command will create a fresh Laravel installation in the directory you specify. For instance, <code class=" language-php">laravel <span class="token keyword">new</span> <span class="token class-name">blog</span></code> will create a directory named <code class=" language-php">blog</code> containing a fresh Laravel installation with all of Laravel's dependencies already installed:</p>
        <pre class=" language-php"><code class=" language-php">laravel <span class="token keyword">new</span> <span class="token class-name">blog</span></code></pre>
        <h4>Via Composer Create-Project</h4>
        <p>Alternatively, you may also install Laravel by issuing the Composer <code class=" language-php">create<span class="token operator">-</span>project</code> command in your terminal:</p>
        <pre class=" language-php"><code class=" language-php">composer create<span class="token operator">-</span>project <span class="token operator">--</span>prefer<span class="token operator">-</span>dist laravel<span class="token operator">/</span>laravel blog</code></pre>
        <h4>Local Development Server</h4>
        <p>If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the <code class=" language-php">serve</code> Artisan command. This command will start a development server at <code class=" language-php">http<span class="token punctuation">:</span><span class="token operator">/</span><span class="token operator">/</span>localhost<span class="token punctuation">:</span><span class="token number">8000</span></code>:</p>
        <pre class=" language-php"><code class=" language-php">php artisan serve</code></pre>
        <p>Of course, more robust local development options are available via <a href="/docs/5.4/homestead">Homestead</a> and <a href="/docs/5.4/valet">Valet</a>.</p>
        <p><a name="configuration"></a></p>
        <h3>Configuration</h3>
        <h4>Public Directory</h4>
        <p>After installing Laravel, you should configure your web server's document / web root to be the <code class=" language-php"><span class="token keyword">public</span></code> directory. The <code class=" language-php">index<span class="token punctuation">.</span>php</code> in this directory serves as the front controller for all HTTP requests entering your application.</p>
        <h4>Configuration Files</h4>
        <p>All of the configuration files for the Laravel framework are stored in the <code class=" language-php">config</code> directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.</p>
        <h4>Directory Permissions</h4>
        <p>After installing Laravel, you may need to configure some permissions. Directories within the <code class=" language-php">storage</code> and the <code class=" language-php">bootstrap<span class="token operator">/</span>cache</code> directories should be writable by your web server or Laravel will not run. If you are using the <a href="/docs/5.4/homestead">Homestead</a> virtual machine, these permissions should already be set.</p>
        <h4>Application Key</h4>
        <p>The next thing you should do after installing Laravel is set your application key to a random string. If you installed Laravel via Composer or the Laravel installer, this key has already been set for you by the <code class=" language-php">php artisan key<span class="token punctuation">:</span>generate</code> command.</p>
        <p>Typically, this string should be 32 characters long. The key can be set in the <code class=" language-php"><span class="token punctuation">.</span>env</code> environment file. If you have not renamed the <code class=" language-php"><span class="token punctuation">.</span>env<span class="token punctuation">.</span>example</code> file to <code class=" language-php"><span class="token punctuation">.</span>env</code>, you should do that now. <strong>If the application key is not set, your user sessions and other encrypted data will not be secure!</strong></p>
        <h4>Additional Configuration</h4>
        <p>Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the <code class=" language-php">config<span class="token operator">/</span>app<span class="token punctuation">.</span>php</code> file and its documentation. It contains several options such as <code class=" language-php">timezone</code> and <code class=" language-php">locale</code> that you may wish to change according to your application.</p>
        <p>You may also want to configure a few additional components of Laravel, such as:</p>
        <div class="content-list">
        <ul>
        <li><a href="/docs/5.4/cache#configuration">Cache</a></li>
        <li><a href="/docs/5.4/database#configuration">Database</a></li>
        <li><a href="/docs/5.4/session#configuration">Session</a></li>
        </ul>
        </div>
        <p><a name="web-server-configuration"></a></p>
        <h2><a href="#web-server-configuration">Web Server Configuration</a></h2>
        <p><a name="pretty-urls"></a></p>
        <h3>Pretty URLs</h3>
        <h4>Apache</h4>
        <p>Laravel includes a <code class=" language-php"><span class="token keyword">public</span><span class="token operator">/</span><span class="token punctuation">.</span>htaccess</code> file that is used to provide URLs without the <code class=" language-php">index<span class="token punctuation">.</span>php</code> front controller in the path. Before serving Laravel with Apache, be sure to enable the <code class=" language-php">mod_rewrite</code> module so the <code class=" language-php"><span class="token punctuation">.</span>htaccess</code> file will be honored by the server.</p>
        <p>If the <code class=" language-php"><span class="token punctuation">.</span>htaccess</code> file that ships with Laravel does not work with your Apache installation, try this alternative:</p>
        <pre class=" language-php"><code class=" language-php">Options <span class="token operator">+</span>FollowSymLinks
        RewriteEngine On

        RewriteCond <span class="token operator">%</span><span class="token punctuation">{</span><span class="token constant">REQUEST_FILENAME</span><span class="token punctuation">}</span> <span class="token operator">!</span><span class="token operator">-</span>d
        RewriteCond <span class="token operator">%</span><span class="token punctuation">{</span><span class="token constant">REQUEST_FILENAME</span><span class="token punctuation">}</span> <span class="token operator">!</span><span class="token operator">-</span>f
        RewriteRule <span class="token operator">^</span> index<span class="token punctuation">.</span>php <span class="token punctuation">[</span>L<span class="token punctuation">]</span></code></pre>
        <h4>Nginx</h4>
        <p>If you are using Nginx, the following directive in your site configuration will direct all requests to the <code class=" language-php">index<span class="token punctuation">.</span>php</code> front controller:</p>
        <pre class=" language-php"><code class=" language-php">location <span class="token operator">/</span> <span class="token punctuation">{</span>
            try_files <span class="token variable">$uri</span> <span class="token variable">$uri</span><span class="token operator">/</span> <span class="token operator">/</span>index<span class="token punctuation">.</span>php<span class="token operator">?</span><span class="token variable">$query_string</span><span class="token punctuation">;</span>
        <span class="token punctuation">}</span></code></pre>
        <p>Of course, when using <a href="/docs/5.4/homestead">Homestead</a> or <a href="/docs/5.4/valet">Valet</a>, pretty URLs will be automatically configured.</p>
        </article>
    </div>
</section>

<section class="panel dark">
    <div class="mw-620px u-offset-vertical">
        <h2>More tutorials</h2>
        <ul class="cards-wrapper">
            <li class="card">
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Beginner</span>
                        <h2 class="card__title">Build A Todo List</h2>
                    </div>
                </a>
            </li>
            <li class="card" >
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Intermediate</span>
                        <h2 class="card__title">How to deploy Laravel</h2>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>

@endsection
