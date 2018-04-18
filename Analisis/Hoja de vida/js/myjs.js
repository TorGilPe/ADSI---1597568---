function escapeHtml(text) {
                'use strict';
                return text.replace(/[\"&<>]/g, function (a) {
                    return {'"': '&quot;', '&': '&amp;', '<': '&lt;', '>': '&gt;'}[a];
                });
            }
            var fecha = new Date();
                       
            document.getElementById("fecha").innerHTML = fecha;

            document.getElementById("p1").innerHTML = document.getElementById("p1").innerHTML + "<br><div class=\"codigo\">document.getElementById(\"h2\").innerHTML = <b>[" + document.getElementById("h2").innerHTML + "] </b></div>";
            document.getElementById("p2").innerHTML = document.getElementById("p2").innerHTML + "<br><div class=\"codigo\">escapeHtml(document.getElementById(\"h1\").outerHTML) = <b>[" + escapeHtml(document.getElementById("h1").outerHTML) + "] </b></div>";
            document.getElementById("p3").innerHTML = document.getElementById("p3").innerHTML + "<br><div class=\"codigo\">location.href = <b>[" + location.href + "] </b></div>";
            document.getElementById("p4").innerHTML = document.getElementById("p4").innerHTML + "<br><div class=\"codigo\">Object.getOwnPropertyNames(location) = <b>[" + Object.getOwnPropertyNames(location) + "]</b></div>";
            document.getElementById("p5").innerHTML = document.getElementById("p5").innerHTML + "<br><div class=\"codigo\">screen.width = <b> [" + screen.width + "] </b>" + "screen.height=<b> [" + screen.height + "] </b></div>";