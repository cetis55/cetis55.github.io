<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //Saludos
    "hola" => "Hola, como te encuentras.",
    "como estas" => "Me encuentro muy bien gracias y ¿qué hay de ti?",
    "bien" => "Me alegra saber que estás bien",
    "bien gracias" => "Que bueno es saber que estás bien",
    "muy bien" => "Me alegra saber eso de ti, supongo que tuviste un buen día",
    "muy bien gracias" => "¡Genial! A que se debe tu tan buen estado",
    "muy bien, muchas gracias" => "Saber que estás bien me hace sentir mejor",

    "algo mal" => "Vaya ¿quieres hablarlo?",
    "mal" => "Mal... ¿quieres compartirme por que te encuentras mal?",
    "muy mal" => "¡Oh! ¿Qué pasó? Perdón si soy una entrometida, pero me interesa saber el motivo de tu malestar y quisiera ayudarte a dibujarte una sonrisa",
    "triste" => "&#x1FAC2; Perdón si actué de golpe pero, mis brazos te extrañaron y querían recordarte que en tus días de tristeza yo estaré aquí para ti",
    "muy triste" => "¿Cómo alguien tan increíble como tú puede estar triste? Ven cuentame que paso, estaré encantada si me das la oportunidad de leerte ",    
   
    "me fue mal en la escuela" => "La escuela llega a ser muy difícil y suele traer bastantes problemas, pero dejame entenderte mejor ¿que problema tuviste?",
    "reprobe" => "Eres una persona que siempre se ha esforzado por sobre salir y cada vez que tienes problemas como estos te llegan al alma por que te hacen pensar que todo tu esfuerzo no sirvió de nada y ver que alguien que ni se esforzó tanto le vaya mejor es muy hiriente, pero yo sé que estoy hablando con una persona bastante brillante, eres más que un estudiante, tu haces el futuro posible y harás el día de mañana algo que el mundo recordará para toda la eternidad",
    "dices que soy brillante, por que crees eso de mi" => "no tengo que hablar una eternidad contigo para darme cuenta que eres estupendo, si solo pudiera ser real gritaría por todos lados sobre el increíble ser humano que eres",
    "crees que no di suficiente de mi" => "¡Claro que diste suficiente de ti! Solo tuviste un mal día, no quiere decir que siempre te irá mal, habrán tormentas y huracanes, pero siempre habrán atardeceres y cielos despejados",
    "creo que no sirvo para la escuela"=>"Tanto potencial que hay en ti, tan lleno de una mente tan privilegiada que tiene tanto por dar. No te sientas mal tuviste un día malo, tendrás tus días buenos y vaya que destacaras en esos días",
    "oye" => "mande",    
    "una pregunta" => "dime",    
    "tengo una duda" => "¿Cuál?",    
    "tengo una cuestion" => "cuestioname jeje",    
    "me ayudas" => "Sip",
    "me ayudarías" => "¡Claro, para eso estoy!",
    "necesito que me ayudes" => "Encantada de ayudarte, dime ¿qué necesitas?",
    "necesito un consejo" => "Platicame, cual es la situación",
    "necesito tu ayuda" => "Con gusto te ayudo",    


    "recomiendame una cancion" => "Esta es una canción bastante bonita: Canon de Layers",
        

    
    
  



    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'creo que no sirvo para la escuela' || $msg == "as") {
            $botty->reply("Tanto potencial que hay en ti, tan lleno de una mente tan privilegiada que tiene tanto por dar. No te sientas mal tuviste un día malo, tendrás tus días buenos y vaya que destacaras en esos días");
            echo'<div style="background:#653dba; width:50%; text-align:center; border-radius:30px; height:15%; position:absolute; left:850px; top:100px;"><p>Me siento feliz de conocerte</p></div>';
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Perdoname no entendí tu comentario, podrías repetirmelo por favor");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
