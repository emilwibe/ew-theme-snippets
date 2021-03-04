<?php get_header(); ?>

<main class="l-wrapper s">
    <p id="four-message"></p>
</main>
<script>

let four_o_four = [
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '4',
    '0',
    '4',
    '_',
    'E',
    'R',
    'R',
    'O',
    'R',
    '_',
    'T',
    'H',
    'I',
    'S',
    '_',
    'P',
    'A',
    'G',
    'E',
    '_',
    'D',
    'O',
    'E',
    'S',
    '_',
    'N',
    'O',
    'T',
    '_',
    'E',
    'X',
    'I',
    'S',
    'T',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#'
];
let fourMessage = document.getElementById("four-message");
let four_o_length = four_o_four.length;
let printed = "";
let arrayCounter = 0;

setInterval(function(){
    printed += four_o_four[arrayCounter];
    fourMessage.innerHTML = printed;
    if(arrayCounter == four_o_length - 1) {
        printed = printed + "\n";
        arrayCounter = 0;
    } else {
        arrayCounter += 1;
    }
}, 500);

</script>

<?php get_footer(); ?>