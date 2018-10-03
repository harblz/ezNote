<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <title>
      Talk to me!
    </title>
    <link href="//" rel="icon" type="image/ico">

    <style>
      #info {
          font-size: 20px;
          }
          #div_start {
          float: right;
          }
          #headline {
          text-decoration: none
          }
          #results {
          font-size: 14px;
          font-weight: bold;
          border: 1px solid #ddd;
          padding: 15px;
          text-align: left;
          min-height: 150px;
          width: 65%;
          margin: 0 auto 0 auto;
          }
          #start_button {
          border: 0;
          background-color:transparent;
          padding: 0;
          }
          .interim {
          color: gray;
          }
          .final {
          color: black;
          padding-right: 3px;
          }
          .button {
          display: none;
          }
          .marquee {
          margin: 20px auto;
          }

          #buttons {
          margin: 10px 0;
          position: relative;
          top: -50px;
          }

          #copy {
          margin-top: 20px;
          }

          #copy > div {
          display: none;
          margin: 0 70px;
          }

          .speech-bubble {
            position: relative;
            background: #00aabb;
            border-radius: .4em;
          }

          .speech-bubble:after {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 0;
            height: 0;
            border: 20px solid transparent;
            border-right-color: #00aabb;
            border-left: 0;
            border-bottom: 0;
            margin-top: -10px;
            margin-left: -20px;
          }

          .speech-bubble2 {
            position: relative;
            background: #00ff80;
            border-radius: .4em;
          }

          .speech-bubble2:after {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 0;
            height: 0;
            border: 20px solid transparent;
            border-right-color: #00ff80;
            border-left: 0;
            border-bottom: 0;
            margin-top: -10px;
            margin-left: -20px;
          }

          .speech-bubble3 {
            position: relative;
            background: #00ff80;
            border-radius: .4em;
          }

          .speech-bubble3:after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            width: 0;
            height: 0;
            border: 20px solid transparent;
            border-left-color: #00ff80;
            border-right: 0;
            border-bottom: 0;
            margin-top: -10px;
            margin-right: -20px;
          }
      </style>
  </head>
  <body class="" id="grid">
    <div class="browser-landing" id="main">
      <div class="compact marquee-stacked" id="marquee">
        <div class="container-fluid">
          <h1>
            Speech to Text Thing
          </h1>
        </div>
      </div>

      <div class="container-fluid">
        <div id="info" class="container-fluid">
          <p id="info_start">
            Go on, say something already!
          </p>
          <p id="info_speak_now" style="display:none">
            Speak now.
          </p>
          <p id="info_no_speech" style="display:none">
            No speech was detected. You may need to adjust your <a href=
            "//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">microphone
            settings</a>.
          </p>
          <p id="info_no_microphone" style="display:none">
            No microphone was found. Ensure that a microphone is installed and that
            <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
            microphone settings</a> are configured correctly.
          </p>
          <p id="info_allow" style="display:none">
            Click the "Allow" button above to enable your microphone.
          </p>
          <p id="info_denied" style="display:none">
            Permission to use microphone was denied.
          </p>
          <p id="info_blocked" style="display:none">
            Permission to use microphone is blocked. To change, go to
            chrome://settings/contentExceptions#media-stream
          </p>
          <p id="info_upgrade" style="display:none">
            Web Speech API is not supported by this browser. Upgrade to <a href=
            "//www.google.com/chrome">Chrome</a> version 25 or later.
          </p>
        </div>
        <br />
        <div id="div_start" style="float: left;">
          <button id="start_button" style="float: left;" onclick="startButton(event)">
            <img alt="Start" id="start_img" src="/img/mic.gif"></button>
        </div>

        <div id="results" style="float: left;" class="speech-bubble">
          <span class="final" id="final_span"></span>
        </div>
      </div>

      <div class="container-fluid" style="display: inline-block; padding-top: 35px;">
        <div class="container-fluid mt-3" style="width: 100%;">
          <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Interim Transcript
            </button>
          </p>
        </div>

        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <span class="interim" id="interim_span"></span>
          </div>
        </div>

        <div id="copy" class="container-fluid">
          <button class="btn btn-info" id="copy_button" onclick="copyButton()">Copy this crap</button>
          <div class="speech-bubble2" style="padding: 15px;font-weight: bold; color: white;" id="copy_info">
            <p>
              Done! Hope it was worth it.
            </p>
          </div>

          <button class="btn btn-success" id="email_button" onclick="emailButton()">Email this crap to someone</button>
          <div class="speech-bubble2" style="padding: 15px;font-weight: bold; color: white;" id="email_info">
            <p>
              Done! Hope it was worth it.
            </p>
          </div>
        </div>
        <div class="compact marquee container-fluid" id="div_language">
          <select id="select_language" class="btn btn-secondary" onchange="updateCountry()">
            </select>&nbsp;&nbsp; <select class="btn btn-secondary" id="select_dialect">
            </select>
        </div>
      </div>
    </div>
<script>
var langs =
[['Afrikaans',       ['af-ZA']],
 ['Bahasa Indonesia',['id-ID']],
 ['Bahasa Melayu',   ['ms-MY']],
 ['Català',          ['ca-ES']],
 ['Čeština',         ['cs-CZ']],
 ['Dansk',           ['da-DK']],
 ['Deutsch',         ['de-DE']],
 ['English',         ['en-AU', 'Australia'],
                     ['en-CA', 'Canada'],
                     ['en-IN', 'India'],
                     ['en-NZ', 'New Zealand'],
                     ['en-ZA', 'South Africa'],
                     ['en-GB', 'United Kingdom'],
                     ['en-US', 'United States']],
 ['Español',         ['es-AR', 'Argentina'],
                     ['es-BO', 'Bolivia'],
                     ['es-CL', 'Chile'],
                     ['es-CO', 'Colombia'],
                     ['es-CR', 'Costa Rica'],
                     ['es-EC', 'Ecuador'],
                     ['es-SV', 'El Salvador'],
                     ['es-ES', 'España'],
                     ['es-US', 'Estados Unidos'],
                     ['es-GT', 'Guatemala'],
                     ['es-HN', 'Honduras'],
                     ['es-MX', 'México'],
                     ['es-NI', 'Nicaragua'],
                     ['es-PA', 'Panamá'],
                     ['es-PY', 'Paraguay'],
                     ['es-PE', 'Perú'],
                     ['es-PR', 'Puerto Rico'],
                     ['es-DO', 'República Dominicana'],
                     ['es-UY', 'Uruguay'],
                     ['es-VE', 'Venezuela']],
 ['Euskara',         ['eu-ES']],
 ['Filipino',        ['fil-PH']],
 ['Français',        ['fr-FR']],
 ['Galego',          ['gl-ES']],
 ['Hrvatski',        ['hr_HR']],
 ['IsiZulu',         ['zu-ZA']],
 ['Íslenska',        ['is-IS']],
 ['Italiano',        ['it-IT', 'Italia'],
                     ['it-CH', 'Svizzera']],
 ['Lietuvių',        ['lt-LT']],
 ['Magyar',          ['hu-HU']],
 ['Nederlands',      ['nl-NL']],
 ['Norsk bokmål',    ['nb-NO']],
 ['Polski',          ['pl-PL']],
 ['Português',       ['pt-BR', 'Brasil'],
                     ['pt-PT', 'Portugal']],
 ['Română',          ['ro-RO']],
 ['Slovenščina',     ['sl-SI']],
 ['Slovenčina',      ['sk-SK']],
 ['Suomi',           ['fi-FI']],
 ['Svenska',         ['sv-SE']],
 ['Tiếng Việt',      ['vi-VN']],
 ['Türkçe',          ['tr-TR']],
 ['Ελληνικά',        ['el-GR']],
 ['български',       ['bg-BG']],
 ['Pусский',         ['ru-RU']],
 ['Српски',          ['sr-RS']],
 ['Українська',      ['uk-UA']],
 ['한국어',            ['ko-KR']],
 ['中文',             ['cmn-Hans-CN', '普通话 (中国大陆)'],
                     ['cmn-Hans-HK', '普通话 (香港)'],
                     ['cmn-Hant-TW', '中文 (台灣)'],
                     ['yue-Hant-HK', '粵語 (香港)']],
 ['日本語',           ['ja-JP']],
 ['हिन्दी',            ['hi-IN']],
 ['ภาษาไทย',         ['th-TH']]];

for (var i = 0; i < langs.length; i++) {
  select_language.options[i] = new Option(langs[i][0], i);
}
select_language.selectedIndex = 7;
updateCountry();
select_dialect.selectedIndex = 6;
showInfo('info_start');


function WordCount(str) { 
  return str.split(" ").length;
}

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function updateCountry() {
  for (var i = select_dialect.options.length - 1; i >= 0; i--) {
    select_dialect.remove(i);
  }
  var list = langs[select_language.selectedIndex];
  for (var i = 1; i < list.length; i++) {
    select_dialect.options.add(new Option(list[i][1], list[i][0]));
  }
  select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
}

var create_email = false;
var final_transcript = '';
var recognizing = false;
var ignore_onend;
var start_timestamp;
if (!('webkitSpeechRecognition' in window)) {
  upgrade();
} else {
  start_button.style.display = 'inline-block';
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;

  recognition.onstart = function() {
    recognizing = true;
    showInfo('info_speak_now');
    start_img.src = 'img/mic-animate.gif';
  };

  recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
      start_img.src = 'img/mic.gif';
      showInfo('info_no_speech');
      ignore_onend = true;
    }
    if (event.error == 'audio-capture') {
      start_img.src = 'img/mic.gif';
      showInfo('info_no_microphone');
      ignore_onend = true;
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 100) {
        showInfo('info_blocked');
      } else {
        showInfo('info_denied');
      }
      ignore_onend = true;
    }
  };

  recognition.onend = function() {
    recognizing = false;
    if (ignore_onend) {
      return;
    }
    start_img.src = 'img/mic.gif';
    if (!final_transcript) {
      showInfo('info_start');
      return;
    }
    showInfo('');
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById('final_span'));
      window.getSelection().addRange(range);
    }
    if (create_email) {
      create_email = false;
      createEmail();
    }
  };

  var state = false;

  var random = [0];

  function chunk(state) {
    var text = interim_span.innerHTML;
    text = text.split(" ");
    for (var i = 0; i < text.length; i++) {
      if ( typeof random[i] === 'undefined' ) {
        var dice = Math.floor(Math.random() * 8) + 1;
        if ( dice <= 3 ) {
          text[i] += "<br>";
          random[i] = 0;
        } else {
          random[i] = 1;
        }
      } else {
        if ( random[i] == 0 ) {
          text[i] += "<br>";
        } else {
          // do nothing
        }
      }
    }
    text = text.join(" ");
    if ( state = 'final') {
      final_span.innerHTML = text;
    } else {
      interim_span.innerHTML = text;
    }
  }

  recognition.onresult = function(event) {
    var interim_transcript = '';
    if (typeof(event.results) == 'undefined') {
      recognition.onend = null;
      recognition.stop();
      upgrade();
      return;
    }
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    if (final_transcript || interim_transcript) {
      showButtons('inline-block');
    }
  };
}

function upgrade() {
  start_button.style.visibility = 'hidden';
  showInfo('info_upgrade');
}

var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  chunk('interim');
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}

var first_char = /\S/;
function capitalize(s) {
  return s.replace(first_char, function(m) { return m.toUpperCase(); });
}

function strip(html)
{
   var tmp = document.createElement("DIV");
   tmp.innerHTML = html;
   return tmp.textContent || tmp.innerText || "";
}

function createEmail() {
  var n = final_transcript.indexOf('\n');
  if (n < 0 || n >= 80) {
    n = 40 + final_transcript.substring(40).indexOf(' ');
  }
  var subject = encodeURI(final_transcript.substring(0, n));
  var body = encodeURI(final_transcript.substring(n + 1));
  window.location.href = 'mailto:?subject=' + subject + '&body=' + body;
}

function copyButton() {
  if (recognizing) {
    recognizing = false;
    recognition.stop();
  }
  const el = document.createElement('textarea');
  el.value = strip(final_span.innerHTML);
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
  copy_info.style.display = 'inline-block';
  setTimeout(function(){ copy_info.style.display = 'none'; }, 3000);
  showInfo('');
}

function emailButton() {
  if (recognizing) {
    create_email = true;
    recognizing = false;
    recognition.stop();
  } else {
    createEmail();
  }
  email_button.style.display = 'inline-block';
  email_info.style.display = 'inline-block';
  setTimeout(function(){ email_info.style.display = 'none'; }, 3000);
  showInfo('');
}

function startButton(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = select_dialect.value;
  recognition.start();
  ignore_onend = false;
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
  start_img.src = 'img/mic-slash.gif';
  showInfo('info_allow');
  showButtons('none');
  start_timestamp = event.timeStamp;
}

function showInfo(s) {
  if (s) {
    for (var child = info.firstChild; child; child = child.nextSibling) {
      if (child.style) {
        child.style.display = child.id == s ? 'inline' : 'none';
      }
    }
    info.style.visibility = 'visible';
  } else {
    info.style.visibility = 'hidden';
  }
}

var current_style;
function showButtons(style) {
  if (style == current_style) {
    return;
  }
  current_style = style;
  copy_button.style.display = style;
  email_button.style.display = style;
  copy_info.style.display = 'none';
  email_info.style.display = 'none';
}
    </script>
  </body>
</html>
