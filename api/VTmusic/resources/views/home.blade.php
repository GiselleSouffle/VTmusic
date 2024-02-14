@extends('layout.main')

@section('title', 'landing page')

@section('content')
<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>
								Esta página para votar dedicada a artistas, géneros, álbumes y canciones proporcionaría a los usuarios una plataforma interactiva para expresar sus preferencias y opiniones en el ámbito musical. Los usuarios podrían votar por sus artistas favoritos, géneros musicales preferidos, álbumes destacados y canciones populares. </h2>
						</header>
						<p>Además, la página podría facilitar el descubrimiento de nueva música al proporcionar insights valiosos sobre las preferencias del público y fomentar la interacción social entre los amantes de la música.</p>
					</section>

				<!-- Two -->
					<section id="two">
						<h2>Categorias</h2>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<!-- <a href="https://i.pinimg.com/736x/d6/3f/63/d63f635b848a96b4b25904c8542f98fc.jpg" class="image descarga"><img src="https://i.pinimg.com/736x/d6/3f/63/d63f635b848a96b4b25904c8542f98fc.jpg" alt="" height="150"></a> -->
								<a href="images/fulls/Adele.jpg" class="image Adele"><img src="/images/fulls/Adele.jpg" alt="" height="250"/></a>
								<h3>Adele</h3>
								<p>El artista mas escuchado.</p>
								<!-- <img src="https://i.pinimg.com/736x/d6/3f/63/d63f635b848a96b4b25904c8542f98fc.jpg" alt="" height="150"> -->
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="/images/fulls/flowers miley cyrus.jpg" class="image flowers"><img src="/images/fulls/flowers miley cyrus.jpg" alt="" height="250" /></a>
								<h3>Flowers - Miley Cyrus</h3>
								<p>La cancion con mas reproducciones.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="/images/fulls/mine.jpg" class="image mine"><img src="/images/fulls/mine.jpg" alt="" height="250"/></a>
								<h3>Un Verano Sin Ti - Bad Bunny</h3>
								<p>El mejor album del momento.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/descarga.jpg" class="image descarga"><img src="images/fulls/descarga.jpg" alt="" height="250"/></a>
								<h3>Pop</h3>
								<p>El genero mas reproducido.</p>
							</article>
						</div>
					</section>

				<!-- Three -->
					<section id="three">
						<h2>¿Cual es tu favorito?</h2>
						<p>Tu opinión cuenta, y queremos que seas parte de la creación de nuestras listas de popularidad. ¿Tienes un artista favorito que crees que merece más reconocimiento? ¿Un género que crees que está subestimado? ¿Un álbum que todos deberían escuchar? ¡Es tu oportunidad de votar y de compartir tus gustos con la comunidad musical!</p>
						<div class="row">
							<div class="col-8 col-12-small">
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall"><input type="text" name="artista" id="artista" placeholder="Artista" /></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="album" id="Album" placeholder="Álbum" /></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="genero" id="genero" placeholder="Género" /></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="cancion" id="cancion" placeholder="Canción" /></div>
								</form>
								<ul class="actions">
									<li><input type="submit" value="Publicar" /></li>
								</ul>
							</div>
							<div class="col-4 col-12-small">
								<ul class="labeled-icons">
									<li>
										<h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
										000-000-0000
									</li>
									<li>
										<h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
										<a href="#">VTmusic@gmail.com</a>
									</li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Four -->
				<!--
					<section id="four">
						<h2>Elements</h2>

						<section>
							<h4>Text</h4>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
							<hr />
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h5>Heading with a Subtitle</h5>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<hr />
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5>
							<h6>Heading Level 6</h6>
							<hr />
							<h5>Blockquote</h5>
							<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
							<h5>Preformatted</h5>
							<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
						</section>

						<section>
							<h4>Lists</h4>
							<div class="row">
								<div class="col-6 col-12-xsmall">
									<h5>Unordered</h5>
									<ul>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
									<h5>Alternate</h5>
									<ul class="alt">
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
								</div>
								<div class="col-6 col-12-xsmall">
									<h5>Ordered</h5>
									<ol>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ol>
									<h5>Icons</h5>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
										<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
									</ul>
								</div>
							</div>
							<h5>Actions</h5>
							<ul class="actions">
								<li><a href="#" class="button primary">Default</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions small">
								<li><a href="#" class="button primary small">Small</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<div class="row">
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary fit">Default</a></li>
										<li><a href="#" class="button fit">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small fit">Small</a></li>
										<li><a href="#" class="button small fit">Small</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section>
							<h4>Table</h4>
							<h5>Default</h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>

							<h5>Alternate</h5>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>

						<section>
							<h4>Buttons</h4>
							<ul class="actions">
								<li><a href="#" class="button primary">Primary</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button large">Large</a></li>
								<li><a href="#" class="button">Default</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="#" class="button primary fit">Fit</a></li>
								<li><a href="#" class="button fit">Fit</a></li>
							</ul>
							<ul class="actions fit small">
								<li><a href="#" class="button primary fit small">Fit + Small</a></li>
								<li><a href="#" class="button fit small">Fit + Small</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
								<li><a href="#" class="button icon solid fa-download">Icon</a></li>
							</ul>
							<ul class="actions">
								<li><span class="button primary disabled">Primary</span></li>
								<li><span class="button disabled">Default</span></li>
							</ul>
						</section>

						<section>
							<h4>Form</h4>
							<form method="post" action="#">
								<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									<div class="col-12">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low Priority</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal Priority</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High Priority</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy of this message</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">I am a human and not a robot</label>
									</div>
									<div class="col-12">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						<section>
							<h4>Image</h4>
							<h5>Fit</h5>
							<div class="box alt">
								<div class="row gtr-50 gtr-uniform">
									<div class="col-12"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
								</div>
							</div>
							<h5>Left &amp; Right</h5>
							<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						</section>

					</section>
				-->

			</div>


@endsection