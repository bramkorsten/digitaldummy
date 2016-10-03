<?php
/*
require_once('lib/config.php');
require_once('lib/state.php');

State::fromInitialPost();

if (!State::courseId() || !State::canvasDomain()) {
  header('HTTP/1.1 403 Forbidden');
  echo 'Connect to this LTI using your Canvas course.';
  exit();
}

if (!State::refreshToken()) {
  // log in
  $uri = 'https://' . State::canvasDomain() . '/login/oauth2/auth?client_id=' . urlencode(Config::clientId(State::canvasDomain())) . '&response_type=code&redirect_uri=' . urlencode(Config::oauthCallbackURI()) . '&state=' . State::oauthState();
  header('Location: ' . $uri);
} else {
  // refresh the access token
  $data = array('client_id' => Config::clientId(State::canvasDomain()),
    'redirect_uri' => urlencode($uri),
    'client_secret' => rawurlencode(Config::clientSecret(State::canvasDomain())),
    'refresh_token' => State::refreshToken(),
    'grant_type' => 'refresh_token');

  $ch = curl_init('https://' . State::canvasDomain() . '/login/oauth2/token');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  $result = json_decode($result, true);
  State::setAccessToken($result['access_token']);
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Digital Dummy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
  <link rel="icon" type="image/png" href="img/D2_Icon-01.png">
  <link rel="stylesheet" href="bower_components/normalize-css/normalize.css">
  <link rel="stylesheet" href="bower_components/css-modal/build/modal.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="css/dailysnapshot.css">
  <link rel="stylesheet" href="css/pong.css">
  <link rel="stylesheet" href="bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script src='bower_components/fastclick/lib/fastclick.js'></script>
  <script src="js/anchorme.js"></script>
  <script src="js/moment.min.js"></script>
	<script src="js/snackbar.js"></script>
  <script src="js/upload.js?v1.1"></script>
</head>
<body>
  <header>
    <div class="dummy-logo">
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="270px"
    	 height="312px" viewBox="0 0 270 312" enable-background="new 0 0 270 312" xml:space="preserve">
<g id="d-shape">
	<path class="d-path" fill="#EA3D3D" d="M166,292.403"/>
	<path class="d-path" fill="#0C9FE8" d="M146,13c-12,0-116.375,0-116.375,0S12,13,12,30.5c0,13.608,0,92.208,0,126.5L155.97,15.002
		C153.119,13.843,149.755,13,146,13z"/>
	<path class="d-path" fill="#0CE8BA" d="M218.002,77.479c-6.998-7.521-51.986-55.866-51.986-55.866s-3.785-4.066-10.046-6.611L12,157l210.92-71.998
		C221.884,82.614,220.339,79.991,218.002,77.479z"/>
	<g>
		<path class="d-path" fill="#0C9FE8" d="M12,173v113.5c0,0,0,14.5,17,14.5s105.037,0,117,0c3.751,0,7.114-0.846,9.967-2.006L12,157
			C12,166.808,12,173,12,173z"/>
		<path class="d-path" fill="#0CE8BA" d="M12,157l143.967,141.994c6.245-2.54,10.033-6.591,10.033-6.591l52-55.881c0,0,2.837-3.06,4.899-7.529
			L12,157z"/>
	</g>
	<g>
		<path class="d-path" fill="#0DFF89" d="M222.899,228.993c1.175-2.546,2.101-5.546,2.101-8.709c0-4.199,0-33.769,0-63.284H12L222.899,228.993z"/>
		<path class="d-path" fill="#0DFF89" d="M222.92,85.002L12,157h213c0-31.743,0-63.426,0-63.426S224.988,89.765,222.92,85.002z"/>
	</g>
</g>
<g id="number_2">
	<path fill="#0CE8BA" d="M239.553,19.216c1.562,0,2.903,0.248,4.023,0.742c1.119,0.495,2.031,1.172,2.734,2.031
		s1.224,1.855,1.562,2.988c0.338,1.133,0.508,2.324,0.508,3.574c0,1.328-0.131,2.565-0.391,3.711l3.477-15.121L239.553,19.216z"/>
	<path fill="#0CE8BA" d="M252.58,38.435c1.055-1.653,1.842-3.284,2.363-4.951c0.521-1.666,0.781-3.461,0.781-5.415
		c0-2.317-0.371-4.393-1.113-6.243c-0.742-1.849-1.791-3.408-3.145-4.684l-3.477,15.121l0.605,11.249
		C250.197,41.741,251.525,40.089,252.58,38.435z"/>
	<path fill="#0CE8BA" d="M247.99,32.263c-0.261,1.146-0.769,2.363-1.523,3.652c-0.756,1.289-1.811,2.715-3.164,4.277
		c-1.354,1.562-3.025,3.412-5.187,5.547L225,58l23.596-14.488L247.99,32.263z"/>
	<path fill="#0DFF89" d="M242.912,49.214c2.188-2.109,4.082-3.931,5.684-5.702L225,58h8.654L242.912,49.214z"/>
	<g>
		<polygon fill="#0DFF89" points="233.654,58 225,58 225,65 258,58 		"/>
		<polygon fill="#0DFF89" points="225,65 258,65 258,58 		"/>
	</g>
	<path fill="#0C9FE8" d="M246.643,14.214c-1.862-0.677-3.926-1.015-6.191-1.015c-3.334,0-6.257,0.613-8.77,1.836v0
		c-2.514,1.225-4.733,2.852-6.66,4.883l3.75,4.492c1.484-1.536,3.111-2.786,4.883-3.75c1.771-0.963,3.736-1.445,5.898-1.445
		l11.914-2.074C250.112,15.867,248.504,14.892,246.643,14.214z"/>
	<path fill="#0CE8BA" d="M234.929,20.065l-8.474,1.572l2.316,2.775C228.771,24.412,232.062,21.25,234.929,20.065z"/>
</g>
    </svg>
    </div>
    <div class="menu-wrapper">
			<form enctype="multipart/form-data" id="upload-form">
				<div id="file-upload-wrapper">
					<input name="file" type="file" id="file-upload"/>
					<i class="fa fa-upload"></i>
				</div>
				<a id="text-upload-wrapper" href="#modal-text">
					<i class="fa fa-plus"></i>
				</a>
				<progress></progress>
			</form>
    	<a id="student-filter-button" class="menu-icon" href="#"><i class="fa fa-sliders"></i></a>
    </div>
  </header>
  <div class="menu-snackbar">
      <div id="select-wrapper" style="/*display:none;*/">
				<h2 id="student-filter-title">
					Filter Students
				</h2>
        <select id="student-filter" title="Student filter">
          <option>Show all</option>
        </select>
      </div>
    </div>
<section class="modal--show" id="modal-text" tabindex="-1"
         role="dialog" aria-labelledby="modal-label" aria-hidden="true">

  <div class="modal-inner">
    <form id="text-upload-form">
      <div class="modal-content">
        <div id="submission-text" placeholder="Type your submission text here."></div>
        <button type="submit" id="text-submit">submit text</button>
      </div>
    </form>
  </div>

  <a href="#!" class="modal-close" title="Close this modal" data-close="Close"
     data-dismiss="modal">?</a>
</section>

<section id="comment-box" style="display: none;" class="container">
  <form id="comment-upload-form">
    <div id="comment-text" placeholder="Type your comment here."></div>
    <button type="submit" id="comment-submit">post</button>
  </form>
</section>

<section id="student-blog" class="container"><h4><time datetime="2016-09-14T08:59:50Z">Wednesday, September 14th</time></h4><article class="row"><header><time>10:59 AM</time></header><iframe src="https://fhict.instructure.com/api/v1/crocodoc_session?blob=%7B%22user_id%22:24640000000006710,%22attachment_id%22:275528,%22type%22:%22crocodoc%22%7D&amp;hmac=a4402f999e2fe3a5fefdf91eb123e58c6cccaaad" class="blog-embed"></iframe></article><article class="row"><header><time>9:43 AM</time></header><img src="https://fhict.instructure.com/files/275413/download?download_frd=1&amp;verifier=7u32ioL8Rm1C9vocwEVvEcYdoeafapGcNZBH4C2R" class="blog-image"></article><h4><time datetime="2016-09-12T10:06:53Z">Monday, September 12th</time></h4><article class="row textpost"><header><time>12:06 PM</time></header><p><h1>Media installation</h1><h2>Ambient room</h2></p></article><article class="row"><header><time>12:06 PM</time></header><img src="https://fhict.instructure.com/files/273122/download?download_frd=1&amp;verifier=foAKORBr3R98Q8u0k60yZTS3b4Pj9YWTuqeyJzCO" class="blog-image"></article><article class="row textpost"><header><time>12:05 PM</time></header><p>Mijn idee is om een visualizer te maken op enorme schaal. Ik wil dat een programma op een computer een visualisatie projecteert op meerdere beamers, waarbij de type visualisatie wordt bepaald door het type muziek / sterkte van de muziek die je speelt.</p></article><article class="row"><header><time>12:02 PM</time></header><video controls="true" src="https://fhict.instructure.com/files/273115/download?download_frd=1&amp;verifier=0JsOeOIl0GUGgT8fMi0WI27hHforpkRhzx62h17U" class="blog-image"><source src="https://fhict.instructure.com/files/273115/download?download_frd=1&amp;verifier=0JsOeOIl0GUGgT8fMi0WI27hHforpkRhzx62h17U" type="video/mp4"></video></article><h4><time datetime="2016-09-05T09:14:43Z">Monday, September 5th</time></h4><article class="row textpost"><header><time>11:14 AM</time></header><p>Dit is mijn verhaal dat ik vandaag heb geschreven</p></article><article class="row"><header><time>11:14 AM</time></header><iframe src="https://fhict.instructure.com/api/v1/crocodoc_session?blob=%7B%22user_id%22:24640000000006710,%22attachment_id%22:265150,%22type%22:%22crocodoc%22%7D&amp;hmac=bacb3e31b5d73ead4ec915119a3bb842be067962" class="blog-embed"></iframe></article><article class="row file"><header><time>11:13 AM</time></header><i class="fa fa-2x file-icon fa-file-image-o"></i><a href="https://fhict.instructure.com/files/265147/download?download_frd=1&amp;verifier=WS91n0TjiNkvpqhSd6YyMGkThXLvz95fYwFTWdaf">High Courage.pages</a></article><h4><time datetime="2016-08-31T09:16:36Z">Wednesday, August 31st</time></h4><article class="row"><header><time>11:16 AM</time></header><img src="https://fhict.instructure.com/files/260036/download?download_frd=1&amp;verifier=1E4Wd7VRs76CjbGZ4RdPzIULXpM0vfw8aDEYBKK5" class="blog-image"></article><article class="row textpost"><header><time>11:16 AM</time></header><p><h3>Het werkt!&nbsp;</h3><div>De code heeft gewerkt, en laat alle lijnen zien op de google maps kaart. Doordat alle lijnen met een opacity van 0.05 getekend worden, krijg je een heat map effect, doordat de doorschijnendheid minder wordt, naarmate er meer lijnen over elkaar lopen.</div><div><br></div><div>Ik wilde nog wat meer informatie toevoegen, bijvoorbeeld over wanneer de date was, de hoeveelheid data en dit soort dingen. Ook wilde ik een simpel laadscherm maken, zodat de gebruiker wist dat de website aan het laden was, en het niet aan de gebruiker lag. Dit heb ik gedaan, en daarna was het proof of concept klaar.</div></p></article><article class="row"><header><time>11:12 AM</time></header><img src="https://fhict.instructure.com/files/260029/download?download_frd=1&amp;verifier=PV1neAV3EZyT5KzLrfVmQXSwaV1ZvExVFLHrOBMC" class="blog-image"></article><article class="row"><header><time>11:12 AM</time></header><img src="https://fhict.instructure.com/files/260028/download?download_frd=1&amp;verifier=3pMYXsFe604BByBt3r7tfquttCWyjpJPaSqyl3l6" class="blog-image"></article><article class="row textpost"><header><time>11:11 AM</time></header><p><h1><span style="font-weight: normal;">De code:</span></h1><div><br></div><div>Het JSON bestand liet de coördinaten zien van het ophaalpunt en afleverpunt, in longitude and latitude. De API van google maps liet het trekken van lijnen op de kaart toe, en wilde de coördinaten graag hebben in een ander formaat, waardoor ik de volgende string moest maken:</div><div><br></div><blockquote><i>' ' . ' {lat: ' . (string)$matrixpoint-&gt;Pickup_latitude . ', lng: ' . (string)$matrixpoint-&gt;Pickup_longitude . '}, {lat: '. (string)$matrixpoint-&gt;Dropoff_latitude . ', lng: ' . (string)$matrixpoint-&gt;Dropoff_longitude . '}';</i></blockquote><div><br></div><div>Deze string werd daarna in een query gezet, waarna een for loop ging lopen, die net zolang blijft lopen tot er geen strings meer over zijn. Dit waren er dus 10000. In deze for loop werd een Javascript functie uitgevoerd waarbij telkens een lijn werd getrokken.</div><div><br></div><div>Hierdoor duurde het laden van de site zeker een seconde of 10, wat niet ideaal is. Voor deze 'proof of concept' ga ik dit ook niet meer verbeteren.</div></p></article><article class="row"><header><time>11:03 AM</time></header><img src="https://fhict.instructure.com/files/260009/download?download_frd=1&amp;verifier=uGDphbnEU3PHAtf4zXwHWgWwoIqDBZHGP3hZo8GH" class="blog-image"></article><article class="row"><header><time>11:03 AM</time></header><img src="https://fhict.instructure.com/files/260008/download?download_frd=1&amp;verifier=xkJ5SKnCTRaOrRp0Z8cYtnI4R0lvRBjvfT1rb2Be" class="blog-image"></article><article class="row textpost"><header><time>11:02 AM</time></header><p>Het omzetten van CSV naar JSON was heel erg makkelijk. Hiervoor heb ik gewoon een website gebruikt die dit allemaal automatisch deed.<div><br></div><div><br><a href="http://www.convertcsv.com/csv-to-json.htm" title="CSV to JSON">CSV to JSON</a><br><br></div><div><br></div><div>Hierna ben ik een standaard website gaan opzetten waarbij een Google Maps kaart op de volledige pagina wordt weergegeven. Eerst heb ik nog getest of Google coördinaten kan uitlezen, en in welk formaat de API hiermee om wilt gaan. Dit bleek van een simpele conversie goed te kunnen.&nbsp;</div></p></article><article class="row"><header><time>10:55 AM</time></header><img src="https://fhict.instructure.com/files/259968/download?download_frd=1&amp;verifier=KydZZAfmBYtrafGhuGR8zpPT0q5CC8LdgunQzu1o" class="blog-image"></article><article class="row textpost"><header><time>10:54 AM</time></header><p>De eerste dag ben ik begonnen met het zoeken naar een Dataset, en de set die me gelijk aansprak was de taxigegevens van New York in 2014. Het probleem: 161,000,000 resultaten. Dit kon ik nooit in gaan laden op een website, want dat was mijn idee. Ik wilde met deze data een heat map creëren op Google Maps. Ik heb daarom de eerste 10000 taxiritten gepakt, en deze omgezet naar JSON.&nbsp;</p></article></section>

<script>
  $(document).ready(function() {
    $("#student-filter").select2();
  });
  $(function() {
    $('#student-filter-button').click(function (event) {
      if ($('.menu-snackbar').hasClass("open") == true) {
        $('#student-filter-button').removeClass("active");
        $('.menu-snackbar').removeClass("open");
      }
      else {
         $('#student-filter-button').addClass("active");
        $('.menu-snackbar').addClass("open");
      }
      });
});
  
</script>
<script>
  
  console.log('clearing cache');
  localStorage.clear();
  // write the upload link
  console.log('Your easy upload link: ', '<?echo State::createUploadLink();?>');

  var canvasDomain = 'https://<?php echo State::canvasDomain(); ?>',
    storeId = '<?php echo base64_encode(State::courseId() . ',' . State::assignmentId() . ',' . State::canvasDomain()); ?>',
    currentUserId = null,
    students = null;

  function getStudentNameForId(id) {
    return students.filter(function (user) {
      return user.id === id;
    })[0].sortable_name;
  }

  function loadStudents() {
    console.log('loading students');
    students = JSON.parse(localStorage.getItem(storeId + '/students'));
    if (students) {
      showStudents();
    }

    var selectElement = document.getElementById('student-filter');
    selectElement.addEventListener('change', function () {
      var selectedIndex = selectElement.selectedIndex;
      if (selectedIndex === 0) {
        currentUserId = null;
        students.forEach(function (student) {
          loadSubmission(student.id);
        });
      } else {
        currentUserId = students[selectedIndex - 1].id;
        loadSubmission(currentUserId);
      }
    });

    console.log('fetching students');
    $.getJSON("service/students.php", function (resp) {
      console.log('students received');
      var cached = localStorage.getItem(storeId + '/students');
      if (!cached) {
        cached = '';
      }
      localStorage.setItem(storeId + '/students', JSON.stringify(resp));

      if (cached.localeCompare(JSON.stringify(resp)) != 0) {
        students = resp;
        showStudents();
      }
    });

    function showStudents() {
      console.log('showing students', students);
      // skip if students list is empty
      if (students.length==0){
        var section = document.getElementById('student-blog');
        section.innerHTML = '<h2>No submissions yet...</h2>';

        return;
      }

      var selectElement = document.getElementById('student-filter'),
        commentElement = document.getElementById('comment-box'),
        uploadForm = document.getElementById('upload-form');

      selectElement.parentNode.style.display = "block";
      selectElement.innerHTML = '';
      var firstOption = document.createElement('option');
      firstOption.innerHTML = 'Show all';
      selectElement.appendChild(firstOption);

      // sort the user names
      students.sort(function (a, b) {
        return a.sortable_name.localeCompare(b.sortable_name);
      });

      students.forEach(function (student) {
        var option = document.createElement('option');
        option.innerHTML = student.sortable_name;
        selectElement.appendChild(option);
      });

      selectElement.selectedIndex = 1;
      if (currentUserId != students[0].id) {
        currentUserId = students[0].id;
        loadSubmission(currentUserId);
      }

      // this is a not-so-nice test to see if the user is a student or a teacher
      if (students.length == 1) {
        selectElement.setAttribute('disabled', 'true');
        selectElement.parentNode.setAttribute('disabled', 'true');
        uploadForm.style.display = 'block';
      } else {
        // teachers cannot upload (sad if you're a teacher AND a student TODO)
        uploadForm.style.display = 'none';
      }
    }
  }

  function loadSubmission(id) {
    console.log('getting', id);
    showSubmissions();

    $.get("service/singlesubmission.php", {user: id},
      function (resp) {
        console.log('receieved', id);
        var submission = resp;
        if (submission.length === 1) {
          localStorage.setItem(storeId + '/submission/' + id, JSON.stringify(submission[0]));
        }
        showSubmissions();
      });

    function showSubmissions() {
      console.log('showing', currentUserId);
      var submissions = [];
      if (currentUserId) {
        var submission = JSON.parse(localStorage.getItem(storeId + '/submission/' + currentUserId));
        if (submission) {
          submissions.push(submission);
        }
      } else {
        students.forEach(function (student) {
          var submission = JSON.parse(localStorage.getItem(storeId + '/submission/' + student.id));
          if (submission) {
            submissions.push(submission);
          }
        });
      }

      var commentElement = document.getElementById('comment-box');

      var articles = [];
      if (!currentUserId) {
        submissions.forEach(function (submission) {
          articles = articles.concat(submission.submission_history);
        });
        commentElement.style.display = 'none';
      } else if (submissions.length > 0) {
        articles = articles.concat(submissions[0].submission_comments).concat(submissions[0].submission_history);

        if (students.length > 1) {
          commentElement.style.display = 'block';
        } else {
          commentElement.style.display = 'none';
        }
      }

      showData(articles);

      function showData(articles) {
        console.log('showing articles', articles);
        var section = document.getElementById('student-blog');
        section.innerHTML = '';

        // filter out submissions that are not comments, text entries, or attached files (should not occur in practice)
        articles = articles.filter(function (article) {
          return article.comment || article.body || article.attachments;
        });

        articles.sort(function (a, b) {
          // sort by submission date and let attachments go before comments (new to old)
          var aa = a.submitted_at ? new Date(a.submitted_at) : new Date(new Date(a.created_at).valueOf() - 20000),
            bb = b.submitted_at ? new Date(b.submitted_at) : new Date(new Date(b.created_at).valueOf() - 20000);
          return bb - aa;
        });

        var dateString = '';

        var hiddenArticles = articles;
        appendFrom(hiddenArticles, 10);

        function appendFrom(attempts, pageLength) {
          for (var i = 0; i < pageLength; i++) {
            var attempt = attempts.shift();
            if (!attempt) {
              break;
            }
            append(attempt);
          }
        }

        function append(attempt) {
          var date = attempt.submitted_at ? attempt.submitted_at : attempt.created_at;
          var newDateString = moment(date).format('dddd, MMMM Do');
          if (newDateString !== dateString) {
            dateString = newDateString;
            var header = document.createElement('h4');
            var dateHeader = document.createElement('time');
            dateHeader.setAttribute('datetime', date);
            dateHeader.innerHTML = dateString;
            header.appendChild(dateHeader);
            section.appendChild(header);
          }

          if (attempt.attachments) {
            var img, audio, video, mediaSource, iframe;
            attempt.attachments.forEach(function (attachment) {
                var article = document.createElement('article');
                article.classList.add('row');

                // add metaheader
                var metaheader = document.createElement('header');
                var time = document.createElement('time');
                time.innerHTML = moment(date).format('LT');
                metaheader.appendChild(time);
                if (!currentUserId) {
                  var author = document.createElement('span');
                  author.classList.add('row-author');
                  author.innerHTML = getStudentNameForId(attempt.user_id);
                  metaheader.appendChild(author);
                }
                article.appendChild(metaheader);

                var contentType = attachment['content-type'];
                switch (contentType) {
                  case 'image/gif':
                  case 'image/png':
                  case 'image/jpeg':
                  case 'image/jpg':
                    img = document.createElement('img');
                    img.src = attachment.url;
                    img.classList.add('blog-image');
                    article.appendChild(img);
                    break;
                  case 'audio/aac':
                  case 'audio/mp4':
                  case 'audio/mpeg':
                  case 'audio/ogg':
                  case 'audio/wav':
                  case 'audio/webm':
                    audio = document.createElement('audio');
                    audio.setAttribute('controls', 'true');
                    audio.src = attachment.url;
                    audio.classList.add('blog-image');
                    mediaSource = document.createElement('source');
                    mediaSource.setAttribute('src', attachment.url);
                    mediaSource.setAttribute('type', contentType);
                    audio.appendChild(mediaSource);
                    article.appendChild(audio);
                    break;
                  case 'video/quicktime':
                  case 'video/mp4':
                  case 'video/ogg':
                  case 'video/webm':
                    video = document.createElement('video');
                    video.setAttribute('controls', 'true');
                    video.src = attachment.url;
                    video.classList.add('blog-image');
                    mediaSource = document.createElement('source');
                    mediaSource.setAttribute('src', attachment.url);
                    mediaSource.setAttribute('type', contentType);
                    video.appendChild(mediaSource);
                    article.appendChild(video);
                    break;
                  case 'application/pdf':
                  case 'application/msword':
                  case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                  case 'application/vnd.ms-powerpoint':
                  case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                  case 'application/vnd.ms-excel':
                  case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                  case 'text/plain':
                  case 'application/x-python':
                  case 'text/x-python':
                  case 'text/javascript':
                  case 'application/x-javascript':
                  case 'text/xml':
                  case 'application/xml':
                  case 'text/css':
                  case 'text/x-markdown':
                  case 'text/x-script.perl':
                  case 'text/x-c':
                  case 'text/x-m':
                  case 'application/json':
                    if (window.self !== window.top) {
                      iframe = document.createElement('iframe');
                      iframe.setAttribute('src', canvasDomain + attachment.preview_url);
                      iframe.classList.add('blog-embed');
                      article.appendChild(iframe);
                      break;
                    }
                  default:
                    console.log('unknown mime:', contentType, attachment);
                    var icon = document.createElement('i');
                    icon.setAttribute('class', 'fa fa-2x file-icon');
                    switch (contentType) {
                      case 'application/zip':
                      case 'application/x-rar-compressed':
                        icon.classList.add('fa-file-zip-o');
                        break;
                      default:
                        icon.classList.add('fa-file-image-o');
                        break;
                    }
                    article.appendChild(icon);

                    var anchor = document.createElement('a');
                    anchor.innerHTML = attachment.display_name;
                    anchor.href = attachment.url;
                    article.classList.add('file');
                    article.appendChild(anchor);
                    break;
                }
                section.appendChild(article);
              }
            );
          }
          if (attempt.comment) {
            var article = document.createElement('article');
            article.classList.add('row');

            // add metaheader TODO REMOVE CODE DUPLICATE except for author id
            var metaheader = document.createElement('header');
            var time = document.createElement('time');
            time.innerHTML = moment(date).format('LT');
            metaheader.appendChild(time);
            if (!currentUserId) {
              var author = document.createElement('span');
              author.classList.add('row-author');
              author.innerHTML = getStudentNameForId(attempt.author_id);
              metaheader.appendChild(author);
            }
            article.appendChild(metaheader);

            // add author to comment
            var authorHeader = document.createElement('div');
            authorHeader.classList.add('commentauthor');
            authorHeader.innerHTML = attempt.author_name.split(" ")[0] + ' says:';
            article.appendChild(authorHeader);

            var paragraph = document.createElement('p');
            paragraph.innerHTML = anchorme.js(attempt.comment); // replaces links!

            article.classList.add('comment');
            article.appendChild(paragraph);
            section.appendChild(article);
          }
          if (attempt.body) {
            var article = document.createElement('article');
            article.classList.add('row');

            // add metaheader TODO REMOVE CODE DUPLICATE except for author id
            var metaheader = document.createElement('header');
            var time = document.createElement('time');
            time.innerHTML = moment(date).format('LT');
            metaheader.appendChild(time);
            if (!currentUserId) {
              var author = document.createElement('span');
              author.classList.add('row-author');
              author.innerHTML = getStudentNameForId(attempt.user_id);
              metaheader.appendChild(author);
            }
            article.appendChild(metaheader);

            var paragraph = document.createElement('div');
            paragraph.innerHTML = anchorme.js(attempt.body.replace(/\n/g, '<br>')); // replaces links!
            article.classList.add('textpost');
            article.appendChild(paragraph);
            section.appendChild(article);
          }
        }

        window.onscroll = respondToScroll;

        function respondToScroll() {
          if (window.scrollY + 1.5 * window.innerHeight - document.body.clientHeight > 0) {
            appendFrom(hiddenArticles, 10);
          }
        }

        document.body.appendChild(section);
      }
    }
  }

  $(function () {
    loadStudents();
  });
</script>

<script>
  if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function () {
      FastClick.attach(document.body);
    }, false);
  }
  
  $("a").click(function (event) {
    event.preventDefault();
    window.location = $(this).attr("href");
  });
</script>

<script src="bower_components/css-modal/modal.js"></script>
<script src="bower_components/trumbowyg/dist/trumbowyg.min.js"></script>
<script>
  $('#submission-text').trumbowyg({
      mobile: true,
      tablet: true,
      fullscreenable: false,
      btns: ['viewHTML',
        '|', 'formatting',
        '|', 'btnGrp-design',
        '|', 'link',
        '|', 'btnGrp-justify',
        '|', 'btnGrp-lists']
    }
  );

  $('#comment-text').trumbowyg({
//      mobile: true,
//      tablet: true,
      fullscreenable: false,
      autogrow: true,
      btns: ['viewHTML',
        '|', 'formatting',
        '|', 'btnGrp-design',
        '|', 'link',
        '|', 'btnGrp-justify',
        '|', 'btnGrp-lists']
    }
  );

  // check in-frame for mobile upload link
  if (window!=window.top) {
    document.getElementById('mobile-upload-link').style.display = 'block';
  }

</script>

</body>
</html>
