<?php //The HTML5 Elements ?>
<section class="element-group" id="introduction">
	<p>Eazy HTML5 Elements includes material copied from or derived from<br><a href="http://www.w3.org/TR/html/">HTML5</a>. Copyright © 2014 W3C® (MIT, ERCIM, Keio, Beihang). </p>
</section>

<section class="element-group" id="headings" >
	<a href="http://www.w3.org/TR/html/sections.html#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements" ><h2>HTML HEADINGS</h2></a>
	<h1>This is a &lt;h1> heading</h1>
	<h2>This is a &lt;h2> heading</h2>
	<h3>This is a &lt;h3> heading</h3>
	<h4>This is a &lt;h4> heading</h4>
	<h5>This is a &lt;h5> heading</h5>
	<h6>This is a &lt;h6> heading</h6>
</section><br>


<section class="element-group" id="grouping">
	<a href="http://www.w3.org/TR/html/grouping-content.html" ><h2>GROUPING HTML CONTENT</h2></a>
	<div id="p-element" class="html-elements">
	  <h4>&lt;p> Element  <button type="button" onclick="toggle_visibility('eazy-p');" class="eazy-html-button" title="More information about the &lt;p> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-p">The &lt;p> element is used to represent a paragraph. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-p-element">The p Element at W3.org</a></cite></blockquote>
	  <p>This is text wrapped in &lt;p> elements.</p>
	</div>
	<div id="hr-element" class="html-elements">
	  <h4>&lt;hr> Element  <button type="button" onclick="toggle_visibility('eazy-hr');" class="eazy-html-button" title="More information about the &lt;hr> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-hr">The &lt;hr> element represents a paragraph-level thematic break, e.g. a scene change in a story, or a transition to another topic within a section of a reference book. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-hr-element">The hr Element at W3.org</a></cite></blockquote>
	  <hr>
	</div>
	<div id="pre-element" class="html-elements">
	  <h4>&lt;pre> ELEMENT  <button type="button" onclick="toggle_visibility('eazy-pre');" class="eazy-html-button" title="More information about the &lt;pre> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-pre">The &lt;pre> element is a block of preformatted text, in which structure is represented by typographic conventions rather than by elements. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-pre-element">The pre Element at W3.org</a></cite></blockquote>
	  <pre>Please    Save    My         Spacing</pre>
	</div>
	<div id="blockquote-element" class="html-elements">
	  <h4>&lt;blockquote> ELEMENT  <button type="button" onclick="toggle_visibility('eazy-blockquote');" class="eazy-html-button" title="More information about the &lt;blockquote> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-blockquote">The &lt;blockquote> element represents content that is quoted from another source, optionally with a citation which must be within a footer or cite element, and optionally with in-line changes such as annotations and abbreviations. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-blockquote-element">The blockquote Element at W3.org</a></cite></blockquote>
	  <blockquote>This is a quote using a &lt;blockquote> <cite>This is the Quote Source using &lt;cite> </cite></blockquote>
	</div>
	<div id="ol-ul-li-element" class="html-elements">
	  <h4>&lt;ol>, &lt;ul>, &lt;li> Elements  <button type="button" onclick="toggle_visibility('eazy-ol');" class="eazy-html-button" title="More information about the &lt;ol>, &lt;ul>, &lt;li> elements">+</button></h4>
	  <p>(Ordered and Un-ordered Lists)</p>
	  <blockquote class="eazy-html-descrip" id="eazy-ol">These elements are used to create lists. The &lt;ol> element is used when the list is ordered and the &lt;ul element is used when the list is unordered. The children elements of list are &lt;li> elements. You can nest &lt;ul> and &lt;ol> elements within a &lt;li> element. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-ol-element">The ol Element at W3.org</a> | <a href="http://www.w3.org/TR/html/grouping-content.html#the-ul-element">The ul Element at W3.org</a> | <a href="http://www.w3.org/TR/html/grouping-content.html#the-li-element">The li Element at W3.org</a></cite></blockquote>
		<div style="width: 49%; display: inline-block;">
			<ol>
				<li>&lt;li> one</li>
				<li>&lt;li> two</li>
				<li>&lt;li> with nested &lt;ol>
					<ol>
						<li>&lt;ol>&lt;li> one</li>
						<li>&lt;ol>&lt;li> two</li>
					</ol>
				</li>
			</ol>
			</div>
			<div style="width: 49%; display: inline-block;">
			<ul>
				<li>&lt;li> one</li>
				<li>&lt;li> two</li>
				<li>&lt;li> with nested &lt;ul>
					<ul>
						<li>&lt;ul>&lt;li> one</li>
						<li>&lt;ul>&lt;li> two</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="dl-dt-dd-element" class="html-elements">
	  <h4>&lt;dl>, &lt;dt>, &lt;dd> Elements  <button type="button" onclick="toggle_visibility('eazy-dl');" class="eazy-html-button" title="More information about the &lt;dl>, &lt;dt>, &lt;dd> elements">+</button></h4>
	  <p>(Description Lists)	</p>
	  <blockquote class="eazy-html-descrip" id="eazy-dl">The &lt;dl> element represents an association list consisting of zero or more name-value groups (a description list). A name-value group consists of one or more names (&lt;dt> elements) followed by one or more values (&lt;dd> elements), ignoring any nodes other than &lt;dt> and &lt;dd> elements. Within a single &lt;dl> element, there should not be more than one &lt;dt> element for each name. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-dl-element">The dl Element at W3.org</a> | <a href="http://www.w3.org/TR/html/grouping-content.html#the-dt-element">The dt Element at W3.org</a> | <a href="http://www.w3.org/TR/html/grouping-content.html#the-dd-element">The dd Element at W3.org</a> </cite></blockquote>
	   <dl>
	     <dt>This is the first &lt;dt> element</dt>
	       <dd>This first &lt;dd> element is used for the description, definition, or value, part of a term-description group in a description list.</dd>
	       <dd>This second &lt;dd> element is used for the description, definition, or value, part of a term-description group in a description list.</dd>
	     <dt>This is the second &lt;dt> element</dt>
	       <dd>This &lt;dd> element is used for the description, definition, or value, part of a term-description group in a description list.</dd>
	   </dl> 
	</div>
	<div id="figure-figcaption-element" class="html-elements">
	  <h4>&lt;figure> and &lt;figcaption> Elements  <button type="button" onclick="toggle_visibility('eazy-figure');" class="eazy-html-button" title="More information about the &lt;figure> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-figure">The figure element represents some flow content, optionally with a caption, that is self-contained (like a complete sentence) and is typically referenced as a single unit from the main flow of the document. The element can thus be used to annotate illustrations, diagrams, photos, code listings, etc. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-figure-element">The figure Element at W3.org</a> | <a href="http://www.w3.org/TR/html/grouping-content.html#the-figcaption-element">The figcaption Element at W3.org</a></cite></blockquote>
	  <figure>
	  	<p>This is an example of the &lt;figure> element displaying text. You can use it for html, images etc.</p> 
	  	<figcaption>This is the &lt;figcaption> for the text.</figcaption>
	  </figure>
	  <br>
	  <figure>
	  	<img src=" <?php echo plugin_dir_url(__FILE__) .   'resources/sample-image.jpg' ?>" alt="This is a sample image showing figure displaying an image.">
	  	<figcaption>This is the &lt;figcaption> for the image.</figcaption>
	  </figure>
	</div>
	<div id="div-element" class="html-elements">
	  <h4>&lt;div> Elements  <button type="button" onclick="toggle_visibility('eazy-div');" class="eazy-html-button" title="More information about the &lt;div> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-div">The &lt;div> element has no special meaning at all. It represents its children. It can be used with the class, lang, and title attributes to mark up semantics common to a group of consecutive elements. &lt;div>s can be useful for stylistic purposes or to wrap multiple &lt;div>s within a class that are all to be annotated or styled in a similar way. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-div-element">The div Element at W3.org</a></cite></blockquote>
	  	<div>&lt;div> This is text inside a div &lt;/div></div>
	</div>
	<div id="main-element" class="html-elements">
	  <h4>&lt;main> Elements  <button type="button" onclick="toggle_visibility('eazy-main');" class="eazy-html-button" title="More information about the &lt;main> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-main">The main element represents the main content of the body of a document or application. The main content area consists of content that is directly related to or expands upon the central topic of a document or central functionality of an application. The main content area of a document includes content that is unique to that document and excludes content that is repeated across a set of documents such as site navigation links, copyright information, site logos and banners and search forms (unless the document or applications main function is that of a search form). Authors must not include more than one main element in a document. Authors must not include the main element as a descendant of an article, aside, footer, header or nav element. <br><cite><a href="http://www.w3.org/TR/html/grouping-content.html#the-main-element">The main Element at W3.org</a></cite></blockquote>
	  &lt;main>The main content would go here&lt;/main>
	</div>
</section><br>


<section class="element-group" id="text">
	<a href="http://www.w3.org/TR/html/text-level-semantics.html"><h2>TEXT LEVEL SEMANTICS</h2></a>
	<div id="a-element" class="html-elements">
	  <h4>&lt;a> Element  <button type="button" onclick="toggle_visibility('eazy-a');" class="eazy-html-button" title="More information about the &lt;a> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-a">The &lt;a> element is used for creating hyperlinks. If the a element has no href attribute, then the element represents a placeholder for where a link might otherwise have been placed, if it had been relevant, consisting of just the element's contents. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-a-element">The a Element at W3.org</a></cite></blockquote>
	  <p>This is a <a href="http://example.com">sample link</a>.</p>
	</div>
	<div id="em-element" class="html-elements">
	  <h4>&lt;em> Element  <button type="button" onclick="toggle_visibility('eazy-em');" class="eazy-html-button" title="More information about the &lt;em> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-em">The &lt;em> element represents emphasis of its contents. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-em-element">The em Element at W3.org</a></cite></blockquote>
	  <p></p>
	</div>
	<div id="strong-element" class="html-elements">
	  <h4>&lt;strong> Element  <button type="button" onclick="toggle_visibility('eazy-strong');" class="eazy-html-button" title="More information about the &lt;strong> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-strong">The &lt;strong> element represents strong importance, seriousness, or urgency for its contents. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-strong-element">The strong Element at W3.org</a></cite></blockquote>
	  <p>I like my text like I like my coffee: <strong>&lt;strong></strong></p>
	</div>
	<div id="small-element" class="html-elements">
	  <h4>&lt;small> Element  <button type="button" onclick="toggle_visibility('eazy-small');" class="eazy-html-button" title="More information about the &lt;small> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-small">The &lt;small> element represents side comments such as small print. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-small-element">The small Element at W3.org</a></cite></blockquote>
	  <p>I think <small>small text</small> is cute!</p>
	</div>
	<div id="s-element" class="html-elements">
	  <h4>&lt;s> Element  <button type="button" onclick="toggle_visibility('eazy-s');" class="eazy-html-button" title="More information about the &lt;s> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-s">The &lt;s> element represents contents that are no longer accurate or no longer relevant. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-s-element">The s Element at W3.org</a></cite></blockquote>
	  <p><s>The earth is flat</s></p>
	</div>
	<div id="cite-element" class="html-elements">
	  <h4>&lt;cite> Element  <button type="button" onclick="toggle_visibility('eazy-cite');" class="eazy-html-button" title="More information about the &lt;cite> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-cite">The &lt;cite> element represents a reference to a creative work. It must include the title of the work or the name of the author(person, people or organization) or an URL reference, which may be in an abbreviated form as per the conventions used for the addition of citation metadata. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-cite-element">The cite Element at W3.org</a></cite></blockquote>
	   <p><cite>Starry Night</cite> by Vincent van Gogh. Painted in 1889.</p> 
	</div>
	<div id="q-element" class="html-elements">
	  <h4>&lt;q> Element  <button type="button" onclick="toggle_visibility('eazy-q');" class="eazy-html-button" title="More information about the &lt;q> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-q">The &lt;q> element represents some phrasing content quoted from another source. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-q-element">The q Element at W3.org</a></cite></blockquote>
	  <p><cite>Mark Twain</cite> once said, <q>All generalizations are false, including this one.</q>
	</div>
	<div id="dfn-element" class="html-elements">
	  <h4>&lt;dfn> Element  <button type="button" onclick="toggle_visibility('eazy-dfn');" class="eazy-html-button" title="More information about the &lt;dfn> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-dfn">The &lt;dfn> element represents the defining instance of a term. The paragraph, description list group, or section that is the nearest ancestor of the &lt;dfn> element must also contain the definition(s) for the term given by the dfn element. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-dfn-element">The dfn Element at W3.org</a></cite></blockquote>
	  <p>You too can have fun with <dfn><abbr title="Hypertext Markup Language">HTML</abbr></dfn>!</p>
	</div>
	<div id="abbr-element" class="html-elements">
	  <h4>&lt;abbr> Element  <button type="button" onclick="toggle_visibility('eazy-abbr');" class="eazy-html-button" title="More information about the &lt;abbr> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-abbr">The &lt;abbr> element represents an abbreviation or acronym, optionally with its expansion. The title attribute may be used to provide an expansion of the abbreviation. The attribute, if specified, must contain an expansion of the abbreviation, and nothing else. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-abbr-element">The abbr Element at W3.org</a></cite></blockquote>
	  <p>I do not open email that goes into the <abbr title="Seriously, Poor Advertising Method">SPAM</abbr> folder.</p>
	</div>
	<div id="data-element" class="html-elements">
	  <h4>&lt;data> Element  <button type="button" onclick="toggle_visibility('eazy-data');" class="eazy-html-button" title="More information about the &lt;data> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-data">The &lt;data> element represents its contents, along with a machine-readable form of those contents in the value attribute. The value attribute must be present. Its value must be a representation of the element's contents in a machine-readable format.  <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-data-element">The data Element at W3.org</a></cite></blockquote>
	  <p><data value="123456789">Some Data</data></p>
	</div>
	<div id="time-element" class="html-elements">
	  <h4>&lt;time> Element  <button type="button" onclick="toggle_visibility('eazy-time');" class="eazy-html-button" title="More information about the &lt;time> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-time">The &lt;time> its contents, along with a machine-readable form of those contents in the datetime attribute. The kind of content is limited to various kinds of dates, times, time-zone offsets, and durations.  <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-time-element">The time Element at W3.org</a></cite></blockquote>
 	  <p><time>2015-12-25T14:54</time></p>
	</div>
	<div id="code-element" class="html-elements">
	  <h4>&lt;code> Element  <button type="button" onclick="toggle_visibility('eazy-code');" class="eazy-html-button" title="More information about the &lt;code> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-code">The &lt;code> element represents a fragment of computer code. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-code-element">The code Element at W3.org</a></cite></blockquote>
	  <p>Here is some code: <code>var a == 1;</code> </p>
	</div>
	<div id="var-element" class="html-elements">
	  <h4>&lt;var> Element  <button type="button" onclick="toggle_visibility('eazy-var');" class="eazy-html-button" title="More information about the &lt;var> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-var">The &lt;var> element represents a variable. This could be an actual variable in a mathematical expression or programming context, an identifier representing a constant, a symbol identifying a physical quantity, a function parameter, or just be a term used as a placeholder in prose. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-var-element">The var Element at W3.org</a></cite></blockquote>
	  <p>This list of variables includes: <var>red</var>, <var>yellow</var> and <var>blue</var>.</p>
	</div>
	<div id="samp-element" class="html-elements">
	  <h4>&lt;samp> Element  <button type="button" onclick="toggle_visibility('eazy-samp');" class="eazy-html-button" title="More information about the &lt;samp> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-samp"> The &lt;samp> element represents output from a program or computing system.<br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-samp-element">The samp Element at W3.org</a></cite></blockquote>
	  <p>The computer responded to my query with <samp>My Answer</samp>.</p>
	</div>
	<div id="kbd-element" class="html-elements">
	  <h4>&lt;kbd> Element  <button type="button" onclick="toggle_visibility('eazy-kbd');" class="eazy-html-button" title="More information about the &lt;kbd> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-kbd"><p>The &lt;kbd> element represents user input (typically keyboard input, although it may also be used to represent other input, such as voice commands). <br>When the &lt;kbd> element is nested inside a &lt;samp> element, it represents the input as it was echoed by the system. <br>When the &lt;kbd> element contains a &lt;samp> element, it represents input based on system output, for example invoking a menu item.<br>When the &lt;kbd> element is nested inside another &lt;kbd> element, it represents an actual key or other single unit of input as appropriate for the input mechanism.</p> <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-kbd-element">The kbd Element at W3.org</a></cite></blockquote>
	  <p>Type <kbd> Red, Yellow, Blue</kbd> on your keyboard.</p>
	</div>
	<div id="sub-element" class="html-elements">
	  <h4>&lt;sub> Element  <button type="button" onclick="toggle_visibility('eazy-sub');" class="eazy-html-button" title="More information about the &lt;sub> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-sub">The &lt;sub> element represents a subscript.<br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-sub-element">The sub Element at W3.org</a></cite></blockquote>	
	  <p>Using <sub>subscript</sub> can be very useful.</p>
	</div>
	<div id="sup-element" class="html-elements">
	  <h4>&lt;sup> Element  <button type="button" onclick="toggle_visibility('eazy-sup');" class="eazy-html-button" title="More information about the &lt;sup> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-sup">The &lt;sup> element represents a superscript. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-sup-element">The sup Element at W3.org</a></cite></blockquote>
	  <p>Using <sup>superscript</sup> can be very useful.</p>
	</div>
	<div id="i-element" class="html-elements">
	  <h4>&lt;i> Element  <button type="button" onclick="toggle_visibility('eazy-i');" class="eazy-html-button" title="More information about the &lt;i> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-i">The &lt;i> element represents a span of text in an alternate voice or mood, or otherwise offset from the normal prose in a manner indicating a different quality of text. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-i-element">The i Element at W3.org</a></cite></blockquote>
	  <p>She named her computer <i>Speedy</i> becuase it was so fast.</p>
	</div>
	<div id="b-element" class="html-elements">
	    <h4>&lt;b> Element  <button type="button" onclick="toggle_visibility('eazy-b');" class="eazy-html-button" title="More information about the &lt;b> element">+</button></h4>
	    <blockquote class="eazy-html-descrip" id="eazy-b">The &lt;b> element represents a span of text to which attention is being drawn for utilitarian purposes without conveying any extra importance and with no implication of an alternate voice or mood. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-b-element">The b Element at W3.org</a></cite></blockquote>
	    <p>The second half of this sentence needs <b>attention drawn to it</b>.</p>
	</div>
	<div id="u-element" class="html-elements">	
	  <h4>&lt;u> Element  <button type="button" onclick="toggle_visibility('eazy-u');" class="eazy-html-button" title="More information about the &lt;u> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-u">The &lt;u> element represents a span of text with an unarticulated, though explicitly rendered, non-textual annotation. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-u-element">The u Element at W3.org</a></cite></blockquote>
	  <p>Part of this sentence is <u>unarticulated, though explicitly rendered, non-textual</u> for the purposes of demonstration.</p>
	</div>
	<div id="mark-element" class="html-elements">
	  <h4>&lt;mark> Element  <button type="button" onclick="toggle_visibility('eazy-mark');" class="eazy-html-button" title="More information about the &lt;mark> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-mark">The &lt;mark> element represents a run of text in one document marked or highlighted for reference purposes, due to its relevance in another context.  <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-mark-element">The mark Element at W3.org</a></cite></blockquote>
	  <p>Part of this sentence is <mark>marked or highlighted for reference purposes</mark>.</p>
	</div>
	<div id="ruby-element" class="html-elements">
	  <h4>&lt;ruby> Element  <button type="button" onclick="toggle_visibility('eazy-ruby');" class="eazy-html-button" title="More information about the &lt;ruby> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-ruby">The &lt;ruby> element allows one or more spans of phrasing content to be marked with ruby annotations. Ruby annotations are short runs of text presented alongside base text, primarily used in East Asian typography as a guide for pronunciation or to include other annotations. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-ruby-element">The ruby Element at W3.org</a></cite></blockquote>
	  <p>This sentence has a <ruby>Ruby annotations<rt>annotation</rt></ruby>.</p>
	</div>
	<div id="bdi-element" class="html-elements">
	  <h4>&lt;bdi> Element  <button type="button" onclick="toggle_visibility('eazy-bdi');" class="eazy-html-button" title="More information about the &lt;bdi> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-bdi">The &lt;bdi> element represents a span of text that is to be isolated from its surroundings for the purposes of bidirectional text formatting.<br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-bdi-element">The bdi Element at W3.org</a></cite></blockquote>
	  <p>This sentence will not show this arabic text <bdi>قررت</bdi> in the right spot of the browser doesn't respect the bdi element. </p>
	</div>
	<div id="bdo-element" class="html-elements">
	  <h4>&lt;bdo> Element  <button type="button" onclick="toggle_visibility('eazy-bdo');" class="eazy-html-button" title="More information about the &lt;bdo> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-bdo">The &lt;bdo> element represents explicit text directionality formatting control for its children. It allows authors to override the Unicode bidirectional algorithm by explicitly specifying a direction override. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-bdo-element">The bdo Element at W3.org</a></cite></blockquote>
	  <p>The following sentence should be right to left. <bdo dir="rtl">This text is right to left.</bdo></p>
	</div>
	<div id="span-element" class="html-elements">
	  <h4>&lt;span> Element  <button type="button" onclick="toggle_visibility('eazy-span');" class="eazy-html-button" title="More information about the &lt;span> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-span">The &lt;span> element doesn't mean anything on its own, but can be useful when used together with the global attributes, e.g. <span class="span-items">class, lang, or dir.</span>It represents its children. <br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-span-element">The span Element at W3.org</a></cite></blockquote>
	  <p><span>This sentence is inside of a span element.</span></p>
	</div>
	<div id="br-element" class="html-elements">
	  <h4>&lt;br> Element  <button type="button" onclick="toggle_visibility('eazy-br');" class="eazy-html-button" title="More information about the &lt;br> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-br">The &lt;br> element represents a line break.<cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-br-element">The br Element at W3.org</a></cite></blockquote>
	  <p>There is a line break <br> in your future.</p>
	</div>
	<div id="wbr-elements" class="html-elements">	
	  <h4>&lt;wbr> Element  <button type="button" onclick="toggle_visibility('eazy-wbr');" class="eazy-html-button" title="More information about the &lt;wbr> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-wbr">The &lt;wbr> element represents a line break opportunity.<br><cite><a href="http://www.w3.org/TR/html/text-level-semantics.html#the-wbr-element">The wbr Element at W3.org</a></cite></blockquote>
	  <p>There might be a<wbr> line<wbr> break<wbr> in your future.</p>
	</div>
</section><br>


<section class="element-group" id="edits">
	<a href="http://www.w3.org/TR/html/edits.html"><h2>EDITS</h2></a>
	<p>The &lt;ins> and &lt;del> elements should not cross implied paragraph boundaries. The datetime attribute may be used to specify the time and date of the change.</p>
	<div id="ins-element" class="html-elements">
	  <h4>&lt;ins> Element</h4>
	  <p>The &lt;ins> element represents an addition to the document.</p>
	    <div class="edits" id="insert">
	  	  <ins datetime="2005-03-16 00:00Z">
	  		This is the first <em>insert</em>.
	  	  </ins>
	    </div>
	  </div>
	  <div id="del-element" class="html-elements">	
	  <h4>&lt;del> Element</h4>
	  <p>The &lt;del> element represents a removal to the document.</p>
	    <div class="edits" id="delete">
	  	 <del datetime="2008-03-01T20:22Z">
	  	 	<ins datetime="2007-12-19 00:00Z">
	  	  		This deletes an insert.
	  	 	</ins>
	   	</del>
	    </div>
	</div>  
</section><br>


<section class="element-group" id="embedded">
	<a href="http://www.w3.org/TR/html/embedded-content-0.html"><h2>EMBEDDED CONTENT</h2></a>
	<div id="img-element" class="html-elements">
	  <h4>&lt;img> Element  <button type="button" onclick="toggle_visibility('eazy-img');" class="eazy-html-button" title="More information about the &lt;img> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-img">The &lt;img> element represents an image. <br> The image given by the src attributes is the embedded content; the value of the alt attribute provides equivalent content for those who cannot process images or who have image loading disabled. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-img-element">The img Element at W3.org</a></cite></blockquote>
	  <img src=" <?php echo plugin_dir_url(__FILE__) .   'resources/sample-image.jpg' ?>" alt="A stuffed lion toy in a swing.">
	</div>
	<div id="iframe-element" class="html-elements">
	  <h4>&lt;iframe> Element  <button type="button" onclick="toggle_visibility('eazy-iframe');" class="eazy-html-button" title="More information about the &lt;iframe> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-iframe">The &lt;iframe> element represents a nested browsing context.<br> The src attribute gives the address of a page that the nested browsing context is to contain. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-iframe-element">The iframe Element at W3.org</a></cite></blockquote>
	  <iframe src="http://example.com" width="360" height="240"></iframe>
	</div>
	<div id="embed-element" class="html-elements">
	  <h4>&lt;embed> Element  <button type="button" onclick="toggle_visibility('eazy-embed');" class="eazy-html-button" title="More information about the &lt;embed> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-embed">The &lt;embed> element provides an integration point for an external (typically non-HTML) application or interactive content. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-embed-element">The embed Element at W3.org</a></cite></blockquote>
	  <embed src="<?php echo plugin_dir_url(__FILE__) .   'resources/sample.swf' ?>"  width="360" height="240">
	</div>
	<div id="object-element" class="html-elements">
	  <h4>&lt;object> Element  <button type="button" onclick="toggle_visibility('eazy-object');" class="eazy-html-button" title="More information about the &lt;object> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-object">The &lt;object> element can represent an external resource, which, depending on the type of the resource, will either be treated as an image, as a nested browsing context, or as an external resource to be processed by a plugin.<br> The data attribute, if present, specifies the address of the resource. If present, the attribute must be a valid non-empty URL. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-object-element">The object Element at W3.org</a></cite></blockquote>
	  <object data="http://example.com" width="360" height="240"></object>
	</div>
	<div id="param-element" class="html-elements">
	  <h4>&lt;param> Element  <button type="button" onclick="toggle_visibility('eazy-param');" class="eazy-html-button" title="More information about the &lt;param> element">+</button></h4>
	  <blockquote class="eazy-html-descrip" id="eazy-param">The &lt;param> element defines parameters for plugins invoked by object elements. It does not represent anything on its own.<br>The name attribute gives the name of the parameter. The value attribute gives the value of the parameter. Both attributes must be present. They may have any value. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-param-element">The param Element at W3.org</a></cite></blockquote>
	  <object data="<?php echo plugin_dir_url(__FILE__) .   'resources/sample.swf' ?>" width="360" height="240">
	  	<param name="foo" value="bar">
	  </object>
	</div>
	<div id="video-element" class="html-elements">
	  <h4>&lt;video> Element  <button type="button" onclick="toggle_visibility('eazy-video');" class="eazy-html-button" title="More information about the &lt;video> element">+</button></h4> 
	  <blockquote class="eazy-html-descrip" id="eazy-video">The &lt;video> element is used for playing videos or movies, and audio files with captions.<br>Content may be provided inside the video element; it is intended for older web browsers which do not support &lt;video> <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-video-element">The video Element at W3.org</a></cite></blockquote>
	  <video width="360" height="240" controls>
	  	<source src="<?php echo plugin_dir_url(__FILE__) .   'resources/SampleVideo_360x240_1mb.mp4' ?>" type="video/mp4">
	  	<source src="<?php echo plugin_dir_url(__FILE__) .   'resources/SampleVideo_320x240_1mb.3gp' ?>" type="video/3gp">
	  	Your browser does not support the video element.
	  </video> 
	</div>
	<div id="audio-element" class="html-elements">
	    <h4>&lt;audio> Element  <button type="button" onclick="toggle_visibility('eazy-audio');" class="eazy-html-button" title="More information about the &lt;audio> element">+</button></h4> 
	    <blockquote class="eazy-html-descrip" id="eazy-audio">The &lt;audio> element represents a sound or audio stream.<br> Content may be provided inside the audio element; it is intended for older web browsers which do not support &lt;audio> <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-audio-element">The audio Element at W3.org</a></cite></blockquote>
	    <audio controls>
	    	<source src="<?php echo plugin_dir_url(__FILE__) .   'resources/SampleAudio_0.4mb.mp3' ?>" type="audio/mpeg">
	    	Your browser does not support the audio element.
	    </audio>
	</div>
	<div id="source-element" class="html-elements">
	      <h4>&lt;source> Element  <button type="button" onclick="toggle_visibility('eazy-source');" class="eazy-html-button" title="More information about the &lt;source> element">+</button></h4> 
	      <blockquote class="eazy-html-descrip" id="eazy-source">The &lt;source> element allows authors to specify multiple alternative media resources for media elements. It does not represent anything on its own. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-source-element">The source Element at W3.org</a></cite></blockquote>
	      <code>
	      	&lt;video width="320" height="240" controls><br>
	      		&nbsp;&lt;source src="video.mp4" type="video/mp4"><br>
	      		&nbsp;&lt;source src="video.3gp" type="video/3gp"><br>
	      		&nbsp;Your browser does not support the video element.<br>
	      	&lt;/video> 
	      </code>
	</div>
	<div id="track-element" class="html-elements">
	  <h4>&lt;track> Element  <button type="button" onclick="toggle_visibility('eazy-track');" class="eazy-html-button" title="More information about the &lt;track> element">+</button></h4> 
	  <blockquote class="eazy-html-descrip" id="eazy-track">The &lt;track> element allows authors to specify explicit external timed text tracks for media elements. It does not represent anything on its own. <cite><a href="http://www.w3.org/TR/html/embedded-content-0.html#the-track-element">The track Element at W3.org</a></cite></blockquote>
	  <code>
	  	&lt;video src="brave.webm"><br>
	  		&nbsp;&lt;track kind=subtitles src=brave.en.vtt srclang=en label="English"><br>
	  		&nbsp;&lt;track kind=captions src=brave.en.hoh.vtt srclang=en label="English for the Hard of Hearing"><br>
	  		&nbsp;&lt;track kind=subtitles src=brave.fr.vtt srclang=fr lang=fr label="Français"><br>
	  		&nbsp;&lt;track kind=subtitles src=brave.de.vtt srclang=de lang=de label="Deutsch"><br>
	  	&lt;/video>
	  </code>
	</div>
</section><br>


<section class="element-group" id="tables">
	<a href="http://www.w3.org/TR/html5/tabular-data.html"><h2>TABULAR DATA aka TABLES</h2></a>
	<table class="table" >
		<caption>HTML Table Layout</caption> 
		<thead> 
			<tr> 
				<th></th> 
				<th scope="col">Column 1</th> 
				<th scope="col">Column 2</th> 
				<th scope="col">Column 3</th> 
				<th scope="col">Column 4</th> 
			</tr> 
		</thead> 
		<tfoot> 
			<tr> 
				<td colspan="5"><p>* This is the table footer. You can add footnotes to your table this way.</p></td> 
			</tr> 
		</tfoot> 
		<tbody> 
			<tr> 
				<th scope="row">Row 1</th> 
				<td>Row 1, Column 1</td> 
				<td>Row 1, Column 2</td> 
				<td>Row 1, Column 3</td> 
				<td>Row 1, Column 4</td> 
			</tr> 
			<tr> 
				<th scope="row">Row 2</th> 
				<td>Row 2, Column 1</td> 
				<td>Row 2, Column 2</td> 
				<td>Row 2, Column 3</td> 
				<td>Row 2, Column 4</td> 
			</tr> 
			<tr> 
				<th scope="row">Row 3</th> 
				<td>Row 3, Column 1</td> 
				<td>Row 3, Column 2</td> 
				<td>Row 3, Column 3</td> 
				<td>Row 3, Column 4</td> 
			</tr> 
		</tbody> 
	</table> 
</section><br>

<section class="element-group" id="forms">
	<a href="http://www.w3.org/TR/html/forms.html"><h2>FORMS</h2></a>
	<form>
		<div class="input-types" id="text-field">
			<strong>Text Field:</strong><br>
			<input type="text" name="firstname">
		</div>
		<div class="input-types" id="password-field">
			<strong>Password Field:</strong><br>
			<input type="password" name="psw">		
		</div>
		<div class="input-types" id="radio-button">
			<strong>Radio Buttons:</strong><br>
			<input type="radio" name="whichButton" value="this" checked> This Button
			<br>
			<input type="radio" name="whichButton" value="that"> That Button
		</div>
		<div class="input-types" id="checkbox">
			<strong>Checkbox:</strong><br>
			<input type="checkbox" name="checkbox1" value="checkboxone"> Checkbox One
			<br>
			<input type="checkbox" name="checkbox2" value="checkboxtwo"> Checkbox Two 
		</div>
		<div class="input-types" id="number">
			<strong>Number:</strong><br>
	  		<input type="number" name="quantity" min="1" max="100">
		</div>
		<div class="input-types" id="date">
			<strong>Date:</strong><br>
			<input type="date" name="selectedDay">
		</div>
		<div class="input-types" id="color">
			<strong>Color:</strong>
			<input type="color" name="favcolor">
		</div>
		<div class="input-types" id="range">
			<strong>Range:</strong>
			<input type="range" name="points" min="0" max="10">
		</div>
		<div class="input-types" id="month">
			<strong>Month:</strong>
			<input type="month" name="newmonth">
		</div>
		<div class="input-types" id="week">	
			<strong>Week:</strong>
			<input type="week" name="week_year">
		</div>
		<div class="input-types" id="time">
			<strong>Time:</strong>
			<input type="time" name="usr_time">
		</div>
		<div class="input-types" id="datetime">
			<strong>Datetime:</strong>
			<input type="datetime" name="newtime">
		</div>
		<div class="input-types" id="datetime-local">
			<strong>Datetime Local:</strong>
			<input type="datetime-local" name="newtime">	
		</div>
		<div class="input-types" id="email">
			<strong>E-mail:</strong>
			<input type="email" name="email">
		</div>
		<div class="input-types" id="tel">
			<strong>Telephone Number:</strong>
			<input type="tel" name="usrtel">
		</div>
		<div class="input-types" id="url">
			<strong>URL:</strong>
			<input type="url" name="homepage">
		</div>
		<div class="input-types" id="fileupload">
			<strong>FILE:</strong>
			<input type="file" name="uploadedfile">
		</div>
		<div class="input-types" id="select">
			<strong>Select:</strong>
			<select name="unittype">
				<option value=""> Select Option </option>
				<option value="1"> Select Option One </option>
				<option value="2"> Select Option Two </option>
				<option value="3"> Select Option Three </option>
				<option value="4"> Select Option Four </option>
				<option value="5"> Select Option Five </option>
			</select>
		</div>
		<div class="input-types" id="datalist">
			<strong>Datalist:</strong>
			<label>
			 Sex:
			 <input name=sex list=sexes>
			</label>
			<datalist id=sexes>
			 <label>
			  or select from the list:
			  <select name="sex">
			   <option value="Female">Female</option>
			   <option value="Male">Male</option>
			  </select>
			 </label>
			</datalist>
		</div>
		<div class="input-types" id="optgroup">
			<strong>Optgroup:</strong>
			 <label>Color:
			  <select name="c">
			   <optgroup label="1.01 Reds">
			    <option value="1.01.1">Red 01: Brick Red
			    <option value="1.01.2">Red 02: Scarlet
			    <option value="1.01.3">Red 03: Maroon
			   <optgroup label="1.02 Greens">
			    <option value="1.02.1">Green 01: Max Green
			    <option value="1.02.2">Green 02: Medium Green
			    <option value="1.02.3">Green 03: Yellow Green
			   <optgroup label="1.03 Blues">
			    <option value="1.03.1">Blue 01: Sky Blue
			    <option value="1.03.2">Blue 02: Blue Green
			    <option value="1.03.3">Blue 03: Ocean Blue
			  </select>
			 </label>
		</div>
		<div class="input-types" id="textarea">
			<strong>Textarea:</strong>
			<textarea cols=30 name=comments maxlength=40></textarea>
		</div>
		<div class="input-types" id="keygen">
			<strong>Keygen:</strong>
			<keygen name="key">
		</div>
		<div class="input-types" id="progress">
			<strong>Progress:</strong>
			<progress value="35" max="100"></progress>
		</div>
		<div class="input-types" id="meter">
			<strong>Meter</strong>
			<meter min="0" max="10" value="5">5/10</meter>
		</div>
		<br><br>
		<input type="submit">
	</form>
</section><br>