    var popup = document.getElementById('popup');
                var healthstatus= document.getElementById('health');
                var btnhide=document.getElementById('subbtn');
        function check() {
            var popup1 = document.getElementById('popup1');
            var popup2 = document.getElementById('popup2');
            var popup3 = document.getElementById('popup3');
            var popup4 = document.getElementById('popup4');

            var a = document.getElementsByName('head[]');
            var count = 0;
            for (var i = 0; i < a.length; i++) {
                if (a[i].checked) {
                    count = count + 1;
                }
            }
            if (count == 0) {
                openpopup1();
            }
            else if (count <= 3) {
                openpopup2();
            } else if (count > 3 && count < 6) {
                openpopup3();
            } else {
                openpopup4();
            }

        }
        function openpopup1() {
            popup1.classList.add('open-popup');

        }
        function openpopup2() {
            popup2.classList.add('open-popup');
            // spanleft.classlist.add('span');
            document.getElementById('This').innerHTML= "I think this will Help you to decide what you have to do";
            document.getElementById('hide').innerHTML="";
        }
        function openpopup3() {
            popup3.classList.add('open-popup');
            document.getElementById('This').innerHTML= "I think this will Help you to decide what you have to do";
            document.getElementById('hide').innerHTML="";
        }
        function openpopup4() {
            popup4.classList.add('open-popup');
            document.getElementById('This').innerHTML= "I think this will Help you to decide what you have to do";
            document.getElementById('hide').innerHTML="";
        }
        function closepopup1() {
            popup1.classList.remove('open-popup');

        }
        function closepopup2() {
             popup2.classList.remove('open-popup');
       window.location.replace('areyousick.html');
    }
        function closepopup3() {
            popup3.classList.remove('open-popup');
            window.location.replace('areyousick.html');
        }
        function closepopup4() {
            popup4.classList.remove('open-popup');
            window.location.replace('areyousick.html');
        }
        function openhealth() {
            healthstatus.classList.add('open-healthstatus');
            btnhide.classList.add('closebtn');


        }
        function closehealth() {
            popup1.classList.remove('open-healthstatus');
            btnhide.classList.remove('closebtn');
        }
    