<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Inicio',

            'nav_community'         => 'Comunidad',
            'nav_news'              => 'Noticias',
            'nav_jobs'              => 'Vacantes', // ¿Vacantes o Rangos? Preguntar a Lorena por el nombre
            'nav_photos'            => 'Fotos',
            'nav_staff'             => 'Equipo',
			'nav_team'              => 'Equipo 2', // Esta opción está deshabilitada, es como otra página de "Equipo", donde saldrian más miembros del Equipo que no estuviesen en "Equipo"
			
            'nav_shop'              => 'shop', // La tienda está deshabilitada
            'nav_buy_points'        => Config::site['shortname'] . ' Shop', // La tienda está deshabilitada
            'nav_buy_club'          => 'Purchase ' . Config::site['shortname'] . ' Club', // La tienda está deshabilitada
            'nav_purchasehistory'   => 'Purchase history', // La tienda está deshabilitada
            'nav_changename'        => 'Change ' . Config::site['shortname'] . 'name', // La tienda está deshabilitada
			'nav_drawyourbadge'     => 'Draw your badge', // La tienda está deshabilitada

            'nav_highscores'        => 'TOPs',

            'nav_forum'             => 'Grupos',

            'nav_helptickets'       => 'Ayuda',

            'nav_housekeeping'      => 'Panel de Control',

            'close'                 => 'Cerrar',
            'cookies'               => 'utiliza cookies para ofrecerte una mejor experiencia en nuestro servicio. Si utilizas nuestra web consideramos que aceptas su uso.',
            'read_more'             => 'Leer más',
			'credits'               => 'Agradecimientos a Raizer y Metus',
			'credits_emu'           => 'Agradecimientos a todo el equipo de Arcturus Morningstar',
			'credits_kekoland'      => 'Agradecimientos al equipo técnico que ha hecho posible',
			'credits_kekoland_names'=> '(Jugacu, lElectrico y Edward)',
            'and_all'               => 'Y finalmente a todos los usuarios de',

            'login_name'            => 'Nombre de usuario',
            'login_password'        => 'Contraseña',
            'login_save_data'       => 'Recordarme en este PC',
            'login_lost_password'   => '¿Contraseña olvidada?', // Esta opción está deshabilitada ya que necesitamos de servidor mail

            'report_message'        => 'Reportar este mensaje',
            'report_certainty'      => 'A continuación vas a reportar este mensaje. ¿Estás seguro de querer hacerlo?',
            'report_inappropriate'  => 'Sí, reportar',

            'user_to'               => 'Entrar al hotel',
            'user_profile'          => 'Mi perfil',
            'user_settings'         => 'Ajustes',
            'user_logout'           => 'Cerrar sesión',

            'header_slogan2'        => 'Una comunidad increíble, Habbo Creditos, HC y más gratis - ' . Config::site['shortname'] . '',
            'header_login'          => 'Iniciar sesión',
            'header_register'       => 'Regístrate aquí',
            'header_to'             => 'Entrar al hotel',

            'footer_helptool'       => 'Ayuda',
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_dialog_cancel'                             => 'Cancelar',
            'web_dialog_validate'                           => 'Aceptar',
            'web_dialog_confirm'                            => 'Confirm your choice',

            'web_hotel_backto'                              => 'Volver al hotel',

            'web_fill_pincode'                              => 'Introduce el código pin que seleccionaste en tus ajustes. Si lo has olvidado, porfavor contáctanos a través del Soporte al Usuario',
            'web_twostep'                                   => '¡Método de seguridad en dos pasos!',
            'web_login'                                     => 'You must be logged in to report this message!',
            'web_loggedout'                                 => 'Logged out :(',

            'web_notifications_success'                     => '¡Enhorabuena!',
            'web_notifications_error'                       => '¡Error!',
            'web_notifications_info'                        => 'Information!',

            'web_page_article_login'                        => 'You must be logged in to post a comment!',

            'web_page_community_photos_login'               => '¡Necesitas iniciar sesión para poder darle me gusta a las fotos!',
            'web_page_community_photos_loggedout'           => 'Estás desconectad@...',

            'web_page_forum_change'                         => 'Change',
            'web_page_forum_cancel'                         => 'Cancel',
            'web_page_forum_oops'                           => 'Oops...',
            'web_page_forum_topic_closed'                   => 'This topic is closed and you can no longer respond.',

            'web_page_profile_login'                        => '¡Necesitas iniciar sesión para poder darle me gusta a las fotos!',
            'web_page_profile_loggedout'                    => 'Estás desconectad@...',

            'web_page_settings_namechange_request'          => 'Request', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'web_page_settings_namechange_not_available'    => 'Not available', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'web_page_settings_namechange_choose_name'      => 'Choose ' . Config::site['shortname'] . 'name', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.

            'web_page_settings_verification_oops'           => 'Oops...',
            'web_page_settings_verification_fill_password'  => '¡Introduce tu contraseña!',
            'web_page_settings_verification_2fa_on'         => 'Google Authenticator se ha enlazado con tu cuenta. Para utilizar otro método de verificación, debes primero eliminar el antiguo.',
            'web_page_settings_verification_2fa_secretkey'  => 'Revisa la aplicación de Google Authenticator, en ella encontrarás un código para desactivar este método de verificación si así lo deseas.',
            'web_page_settings_verification_2fa_authcode'   => '¡Método de seguridad en dos pasos!',
            'web_page_settings_verification_pincode_on'     => 'Ya tienes un código pin en tu cuenta, para cambiarlo o usar otro método de verificación debes eliminar primero el que ya tenias.',
            'web_page_settings_verification_2fa_off'        => 'Google Authenticator se ha enlazado con tu cuenta. Para utilizar otro método de verificación, debes primero eliminar el antiguo.',
            'web_page_settings_verification_pincode_off'    => 'Para desactivar el método de seguridad de dos pasos necesitamos que introduzcas antes tu código pin.',
            'web_page_settings_verification_pincode'        => '¡Método de seguridad en dos pasos!',
            'web_page_settings_verification_switch'         => 'Pulsa el botón para seleccionar un método de verificación',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf', // La tienda está deshabilitada
            'web_page_shop_offers_neosurf_description'      => 'Pay easily with Paypal and your GOTW-Points will be topped up immediately.', // La tienda está deshabilitada
            'web_page_shop_offers_neosurf_dialog'           => 'Enter your Paypal e-mailaddress below to continue.', // La tienda está deshabilitada
            'web_page_shop_offers_paypal_name'              => 'Paypal', // La tienda está deshabilitada
            'web_page_shop_offers_paypal_description'       => 'Pay easily with Paypal and your GOTW-Points will be topped up immediately.', // La tienda está deshabilitada
            'web_page_shop_offers_paypal_dialog'            => 'Enter your Paypal e-mailaddress below to continue.', // La tienda está deshabilitada
            'web_page_shop_offers_sms_name'                 => 'SMS', // La tienda está deshabilitada
            'web_page_shop_offers_sms_description'          => 'Send a code by SMS and receive a GOTW-Points code.', // La tienda está deshabilitada
            'web_page_shop_offers_sms_dialog'               => 'Send the code below in an SMS to get a GOTW-Points code.', // La tienda está deshabilitada
            'web_page_shop_offers_audiotel_name'            => 'Audiotel', // La tienda está deshabilitada
            'web_page_shop_offers_audiotel_description'     => 'Call a number one or more times to get a GOTW-Points code.', // La tienda está deshabilitada
            'web_page_shop_offers_audiotel_dialog'          => 'Call the number below to get a GOTW-Points code.', // La tienda está deshabilitada
            'web_page_shop_offers_pay_with'                 => 'Pay with', // La tienda está deshabilitada
            'web_page_shop_offers_points_for'               => 'GOTW-Points for', // La tienda está deshabilitada
            'web_page_shop_offers_get_code'                 => 'Get a GOTW-Points code', // La tienda está deshabilitada
            'web_page_shop_offers_fill_code'                => 'Enter your GOTW-Points code', // La tienda está deshabilitada
            'web_page_shop_offers_fill_code_desc'           => 'Enter your GOTW-Points code below to receive your GOTW-Points.', // La tienda está deshabilitada
            'web_page_shop_offers_submit'                   => 'Submit', // La tienda está deshabilitada
            'web_page_shop_offers_success'                  => 'Purchase successful!', // La tienda está deshabilitada
            'web_page_shop_offers_received'                 => 'Thank you for your purchase. You got', // La tienda está deshabilitada
            'web_page_shop_offers_received2'                => 'GOTW-Points.', // La tienda está deshabilitada
            'web_page_shop_offers_close'                    => 'Close', // La tienda está deshabilitada
            'web_page_shop_offers_failed'                   => 'Purchase failed!', // La tienda está deshabilitada
            'web_page_shop_offers_failed_desc'              => 'The purchase failed. Try again or contact us via the Help Tool.', // La tienda está deshabilitada
            'web_page_shop_offers_back'                     => 'Back', // La tienda está deshabilitada
            'web_page_shop_offers_no_card'                  => 'If you do not have a Neosurf prepaid card, you can see the', // La tienda está deshabilitada
            'web_page_shop_offers_no_card2'                 => 'points of sale', // La tienda está deshabilitada
            'web_page_shop_offers_to'                       => 'to', // La tienda está deshabilitada
            'web_page_shop_offers_buy_code'                 => 'Purchase access code', // La tienda está deshabilitada
            'web_page_hotel_loading'                        => 'is now loading...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Oops, there is something wrong!.',
            'web_page_hotel_sometinhg_wrong_2'              => 'Reload the page',
            'web_page_hotel_sometinhg_wrong_3'              => 'Or create a ticket in the helptool',
            'web_page_hotel_welcome_at'                     => 'Bienvenid@ a',
            'web_page_hotel_soon'                           => 'Cargando el universo de píxeles...',
            'web_hotel_active_flash_1'                      => '¡Ya casi estás en ' . Config::site['shortname'] .'!',
			'web_hotel_active_flash_2'                      => 'Para poder jugar a ' . Config::site['shortname'] .', tienes que instalar, permitir o actualizar Adobe Flash Player. Por favor,', 
            'web_hotel_active_flash_3'                      => 'HAZ CLIC AQUÍ',
            'web_hotel_active_flash_4'                      => 'Si no funciona dale a "Permitir" flash, en la configuración de tu navegador.'
        ),

        /*     App/View/Community     */
        'article' => array (
            'reactions'                 => 'Comentarios',
            'reactions_empty'           => 'Aún no hay comentarios',
            'reactions_fill'            => 'Añade un comentario aquí...',
            'reactions_post'            => 'Enviar',
            'latest_news'               => 'Últimas noticias',
            'reaction_hidden_yes'       => '¡Ahora el comentario es invisible y nadie podrá verlo!',
            'reaction_hidden_no'        => '¡Ahora el comentario es visible y todos podrán verlo!',
            'forbidden_words'           => '¡Tu comentario contiene palabras prohibidas!',
        ),
        'forum' => array (
          /*  Forum/index.html  */
            'index_topics'              => 'Todos los hilos de discusión',
            'index_latest_activities'   => 'Últimos hilos de discusión',
            'index_by'                  => 'por',

          /*  Forum/category.html  */
            'category_new_topic'        => 'Nuevo Hilo de Discusión',
            'category_back'             => 'Cancelar',
            'category_topics'           => 'Hilo de Discusión',
            'category_posts'            => 'Mensajes',
            'category_latest_reacts'    => 'Último mensaje',
            'category_topic_by'         => 'Por',
            'category_no_reacts'        => 'No hay mensajes aún',
            'category_latest_react_by'  => 'Último mensaje por',
            'category_create_topic'     => 'Crear mensaje en el Foro de Grupo',
            'category_subject'          => 'Asunto del Hilo de Discusión',
            'category_description'      => 'Mensaje',
            'category_create_button'    => 'Publicar',
            'category_or'               => 'o',
            'category_cancel'           => 'Cancelar',

          /*  Forum/topic.html  */
            'topic_react'               => 'Contestar',
            'topic_close'               => 'Cerrar',
            'topic_reopen'              => 'Abrir',
            'topic_since'               => 'Usuario hace:',
            'topic_posts'               => 'Mensajes:',
            'topic_topic'               => 'Hilo de discusión:',
            'topic_reaction'            => 'Reaction:',
            'topic_closed'              => '¡Atención! Este hilo está cerrado, ¿Estás en desacuerdo? ¡De ser así contactanos a través del',
            'topic_helptool'            => 'soporte al usuario',
            'topic_and'                 => 'and',
            'topic_likes_1'             => 'others like this!',
            'topic_likes_2'             => 'le(s) ha gustado esto!',
            'topic_likes_3'             => 'le ha gustado esto!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'by'          => 'por',
            'photos_by'   => 'Galería de fotos',
            'photos_desc' => '¡Menudas fotos sacan nuestros usuarios! Aquí podrás ver todo tipo de imágenes que se realizan en el interior de nuestro hotel ¿divertido verdad? ¡Solo tienes que entrar para ver el juego con tus propios ojos!.',
            'load_more'   => 'Cargar más fotos'
        ),
        'community_staff' => array (
            'title'       => 'Equipo staff',
            'desc'        => 'Si alguna de tus dudas no puede ser resuelta consulta con cualquier miembro del equipo, ¡Te atenderemos con mucho gusto!',
            'content_1'   => 'El equipo de ' . Config::site['shortname'] . ' es responsable de mantener el orden en el hotel, incluyendo promociones, eventos y cuidar de seguimiento de todas las quejas. Todos los miembros legítimos del Equipo de ' . Config::site['shortname'] . ' tienen el distintivo de identificación personal, la misma se puede ver arriba, así que no se deje engañar por personas que dicen ser miembros del personal, por eso mismo ' . Config::site['shortname'] . ' es el mejor Habbo de habla hispana de la web.',
        ),
        'community_value' => array (
            'title_header'      => 'Catalogue marketplace', // La tienda está deshabilitada
            'decs_header'       => 'All the exclusive furniture with a value higher than the type \'credits\' can you buy here!', // La tienda está deshabilitada
            'furni_name'        => 'Furniname', // La tienda está deshabilitada
            'furni_type'        => 'Type', // La tienda está deshabilitada
            'furni_costs'       => 'Now', // La tienda está deshabilitada
            'furni_amount'      => 'In game', // La tienda está deshabilitada
            'furni_value'       => 'Old price', // La tienda está deshabilitada
            'furni_rate'        => 'Rate', // La tienda está deshabilitada
            'looking_for'       => 'I\'m looking for..', // La tienda está deshabilitada
            'seller'            => 'Seller', // La tienda está deshabilitada
            'price'             => 'Price', // La tienda está deshabilitada
            'nav_my'            => 'My marketplace', // La tienda está deshabilitada
            'nav_shop'          => 'Marketplace', // La tienda está deshabilitada
            'nav_catalogue'     => 'Catalogue', // La tienda está deshabilitada
            'marketplace_desc'  => 'Sellers of ' . Config::site['shortname'] . ' hotel offer their stuff here that you can pay for with your currencys. Maybe you will find here exclusive items that you normally cannot buy in our catalogue!' // La tienda está deshabilitada
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
          /*  Help/help.html  */
            'help_title'                => 'FAQ', // Las FAQS están deshabilitadas
            'help_label'                => 'Find all the answers about your questions here!', // Las FAQS están deshabilitadas
            'help_other_questions'      => 'Other questions', // Las FAQS están deshabilitadas
            'help_content_1'            => 'Didn\'t find the answer to your question? Do not hesitate to contact our customer service so that we can provide more information.', // Las FAQS están deshabilitadas
            'title'                     => 'Herramienta de Soporte al Usuario',
            'desc'                      => 'Aquí puedes ver algunas de las dudas más recurrentes en los usuarios; si fuera necesario, ¡háznoslo saber! Manda un ticket.',

          /*  Help/request.html  */
            'request_closed'            => 'CERRADO',
            'request_on'                => 'A:',
            'request_ticket_amount'     => 'Cantidad de tickets:',
            'request_react_on'          => 'Respuesta a:',
            'request_react'             => 'Responder',
            'request_description'       => 'Descripción',
            'request_react_on_ticket'   => 'Enviar respuesta',
            'request_contact'           => 'Contáctanos',
            'request_contact_help'      => 'Aquí puedes consultar y dejar tu ticket.',
            'request_new_ticket'        => 'Añadir ticket',
            'request_subject'           => 'Asunto',
            'request_type'              => 'Tipo',
            'request_status'            => 'Fecha y hora de creación (GMT+1)',
            'request_in_treatment'      => 'En resolución',
            'request_open'              => 'Abierto',
            'request_closed'            => 'Cerrado'
        ),
        'help_new' => array (
            'title'         => 'Mi ticket',
            'subject'       => 'Asunto',
            'description'   => 'Descripción detallada',
            'open_ticket'   => 'Envía tu ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => 'Entrar al hotel',
            'friends_online'          => 'Online friends',
            'latest_news'             => 'Últimas noticias',
            'latest_facts'            => 'Echa un vistazo a las últimas novedades de ' . Config::site['shortname'] . ' consultando la página de Noticias: ¡cada día descubriras cosas de lo más cool!',
            'popular_rooms'           => 'Salas más populares',
            'popular_rooms_label'     => 'Conoce las salas más populares ahora mismo',
            'popular_no_rooms'        => 'No hay ningún usuario dentro del hotel',
            'goto_room'               => 'Ir a la Sala',
            'popular_groups'          => 'Grupos más populares',
            'popular_groups_label'    => 'En ' . Config::site['shortname'] . ' no hay tiempo para estar sol@. ¡Únete a un Grupo y da la nota junto a tus amig@s!',
            'popular_no_groups'       => 'No hay ningún grupo dentro del hotel',
            'load_news'               => 'Cargar más noticias',
            'user_of_the_week'        =>  Config::site['shortname'] . ' of the week', // De momento no funciona
            'user_of_the_week_label'  => 'User of the week' // De momento no funciona
        ),
        'lost' => array (
            'page_not_found'          => '¡OH, BOBBA! PÁGINA NO ENCONTRADA.',
            'page_content_1'          => 'Frank no encuentra la página que estás buscando.',
            'page_content_2'          => 'Por favor comprueba la URL o inténtalo de nuevo desde la página de inicio.',
            'sidebar_title'           => 'Quizás estabas buscando...',
            'sidebar_stats'           => '¿El perfil de un amigo?',
            'sidebar_stats_label_1'   => 'Quizás puedas verle en los',
            'sidebar_stats_label_2'   => 'TOPs',
            'sidebar_rooms'           => '¿Salas más populares?',
            'sidebar_rooms_label_1'   => 'Revisa el',
            'sidebar_rooms_label_2'   => 'Navegador',
            'sidebar_else'            => 'No se que hago aquí...',
            'sidebar_else_label'      => 'Comunica a algún Staff que has hecho para que te llevara a esta página.'
        ),
        'profile' => array (
            'since'                 => 'Creado:',
			'currently'             => 'Estado:',
            'never_online'          => 'Aún no ha iniciado sesión',
            'last_visit'            => 'Último inicio de sesión:',
            'guestbook_title'       => 'Libro de visitas',
            'guestbook_label'       => '¿Quieres dejar algún mensaje? ¡Adelante!',
            'guestbook_input'       => 'Escribe tu mensaje',
            'guestbook_input_1'     => 'Escribe otro mensaje',
            'badges_title'          => 'Placas',
            'badges_label'          => 'Estas son algunas placas que poseo, ¿Crees que conseguire más?',
            'badges_empty'          => 'Aún no tienen ninguna placa',
            'friends_title'         => 'Amigos',
            'friends_label'         => 'Estos son algunos amigos que tengo en mi lista, ¿Nos hacemos amigos?',
            'friends_empty'         => 'Aún no tienen ningún amigo',
            'groups_title'          => 'Grupos',
            'groups_label'          => 'Estos son algunos de mis grupos. ¿Te unes?',
            'groups_empty'          => 'Aún no tienen ningún grupo',
            'rooms_title'           => 'Salas',
            'rooms_label'           => 'Estas son las últimas salas que he creado, ¿Crees que hare más?',
            'rooms_empty'           => 'Aún no has creado ninguna sala',
            'photos_title'          => 'Fotos',
            'photos_label'          => 'Estas son algunas de mis fotos, ¿Nos hacemos una foto juntos?',
            'photos_empty'          => 'Aún no has hecho ninguna foto',
            'title'                 => 'Perfil de'
        ),
        'registration' => array (
            'title'                 => '¡ÚNETE AHORA!',
            'email'                 => 'Correo electrónico',
            'email_fill'            => 'Correo electrónico',
            'email_help'            => 'Procura utilizar un correo electrónico que recuerdes, ya que en caso de olvidar tu contraseña, lo necesitarás.',
            'password'              => 'Contraseña',
            'password_fill'         => 'Contraseña',
            'password_repeat'       => 'Repetir contraseña',
            'password_repeat_fill'  => 'Repetir contraseña',
            'password_help_1'       => 'Usa al menos 6 caracteres. Para aumentar la seguridad se recomiendan mayúsculas, minúsculas y números a la vez.',
            'password_help_2'       => 'Por motivos de seguridad utiliza una contraseña diferente y no la misma que en otras páginas webs.',
            'birthdate'             => 'Fecha de nacimiento',
            'day'                   => 'Día',
            'month'                 => 'Mes',
            'year'                  => 'Año',
            'birthdate_help'        => 'Por favor, introduce tu fecha de nacimiento real.',
            'birthdate_help2'       => 'Usaremos esa información para devolverte la cuenta si alguna vez pierdes el acceso.',
            'birthdate_help3'       => 'Tu fecha de nacimiento nunca será publica.',
			'create_user'           => 'Regístrate ahora y...',
            'username'              => 'Nombre de usuario',
            'username_fill'         => 'Nombre de usuario',
            'username_help'         => 'El nombre que elijas será definitivo, así que piénsalo bien.',
            'sex'                   => '¿Chico o chica?',
            'male'                  => 'Chico',
            'female'                => 'Chica',
            'register'              => 'Crear mi cuenta',
            'header_slogan2'        => 'Conoce a gente nueva y haz muchos amigos, chatea con otros, crea tu avatar, diseña salas y mucho más...'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Solicitud de Vacante',
            'content_1'           => 'Ante todo gracias por tu interés en obtener rango en ' . Config::site['shortname'] . '.',
            'content_2'           => 'Intentaremos responder a tu solicitud lo antes posible pero por favor ten en cuenta que el número de solicitudes puede ser muy elevado por tanto te pedimos un poco de paciencia...',
            'description'         => '(Rango para el que se echa la solicitud)',
            'question_name'       => '¿Cuál es tu nombre de usuario?',
            'question_age'        => 'Cuenta de Discord',
            'question_why'        => '¿Por qué piensas que estas capacitado para el cargo?',
            'question_time'       => '¿Cuantas horas puedes estar online?',
            'question_time_help'  => 'Dinos cuantas horas puedes echar al día en ' . Config::site['shortname'] . '.',
            'monday'              => 'Lunes',
            'tuesday'             => 'Martes',
            'wednesday'           => 'Miércoles',
            'thursday'            => 'Jueves',
            'friday'              => 'Viernes',
            'saturday'            => 'Sábado',
            'sunday'              => 'Domingo',
            'time_to_time'        => 'De 8 de la mañana a 3 de la tarde (Esto es solo un ejemplo)',
            'send'                => 'Enviar Solicitud'
        ),
        'jobs' => array (
            'title'                   => 'Lista de Vacantes',
            'applications'            => 'Mis Solicitudes',
            'available_applications'  => 'Vacantes Disponibles',
            'react'                   => 'Enviar Solicitud'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => '¿Olvidaste tu contraseña?', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'content_1'             => 'Introduce tu nombre de usuario y tu correo electrónico y te enviaremos un link por correo electrónico para que puedas reestablecer tu contraseña.', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'content_2'             => 'No le des el link que se te facilitara por correo electrónico a nadie.', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'username'              => 'Nombre de usuario', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'email'                 => 'Correo electrónico', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'send'                  => 'Enviar', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'wrong_page'            => '¡FALSA ALARMA!', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'wrong_page_content_1'  => 'Si has recordado tu contraseña o has acabado aquí por accidente, puedes utilizar el link de abajo para volver a la página de inicio.', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'back_to_home'          => 'Volver al Inicio' // Esta opción está deshabilitada ya que necesitamos de servidor mail
        ),
        'password_reset' => array (
            'title'                     => 'Change Password', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'new_password'              => 'New password', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'new_password_fill'         => 'Enter your new password...', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'new_password_repeat_fill'  => 'Please re-enter your password...', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            'change_password'           => 'Change password' // Esta opción está deshabilitada ya que necesitamos de servidor mail
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Mis ajustes',
            'password'       => 'Cambiar contraseña',
            'verification'   => 'Seguridad en dos pasos',
            'email'          => 'Cambiar correo electrónico',
            'namechange'     => 'Change ' . Config::site['shortname'] . 'name', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'shop_history'   => 'Purchase history' // La tienda está deshabilitada
        ),
        'settings_email' => array (
            'title'           => 'Cambiar correo electrónico',
            'email_title'     => 'Correo electrónico',
            'email_label'     => 'Procura utilizar un correo electrónico que recuerdes, ya que en caso de olvidar tu contraseña, lo necesitarás.',
            'password_title'  => 'Contraseña',
            'fill_password'   => 'Contraseña',
            'save'            => 'Guardar'
        ),
        'settings_namechange' => array (
            'title'           => 'Change ' . Config::site['shortname'] . 'name', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'help_1'          => 'Do you want to change your ' . Config::site['shortname'] . 'name? Which can! This costs', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'help_2'          => 'and will be debited immediately after your request. Once your name has been changed we cannot reverse it! So make sure you think carefully about your decision!', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'fill_username'   =>  Config::site['shortname'] . 'name...', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            'request'         => 'Request' // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
        ),
        'settings_password' => array (
            'title'                     => 'Cambiar contraseña',
            'password_title'            => 'Contraseña',
            'fill_password'             => 'Contraseña',
            'newpassword_title'         => 'Nueva contraseña',
            'fill_newpassword'          => 'Nueva contraseña',
            'fill_newpassword_repeat'   => 'Repetir nueva contraseña',
            'help_1'                    => 'Usa al menos 6 caracteres. Para aumentar la seguridad se recomiendan mayúsculas, minúsculas y números a la vez.',
			'help_2'                    => 'Por motivos de seguridad utiliza una contraseña diferente y no la misma que en otras páginas webs.',
            'save'                      => 'Guardar'
        ),
        'settings_preferences' => array (
            'title'               => 'Mis ajustes',
            'follow_title'        => 'Seguir' ,
            'follow_label'        => 'No quiero que nadie pueda seguirme',
            'friends_title'       => 'Peticiones de amigos',
            'friends_label'       => 'No quiero recibir peticiones de amistad',
            'room_title'          => 'Invitaciones',
            'room_label'          => 'No quiero recibir invitaciones en consola',
            'hotelalerts_title'   => 'Alertas del Hotel',
            'hotelalerts_label'   => 'No quiero recibir alertas de eventos que se abran ni del hotel',
            'chat_title'          => 'Chat',
            'chat_label'          => 'Prefiero el chat antiguo'
        ),
        'settings_verification' => array (
            'title'                 => 'Seguridad en dos pasos',
            'help'                  => 'Esta medida protegera tu cuenta ante posibles accesos por parte de terceros. Cuando inicies sesión, se solicitará de manera adicional la medida que puedes introducir aquí a continuación.',
            'password_title'        => 'Contraseña',
            'auth_title'            => 'Verificación en dos pasos',
            'auth_label'            => 'Protege tu cuenta añadiendole más seguridad',
            'method_title'          => 'Método de verificación',
            'method_choose'         => 'Escoge tu método de verificación aquí...',
            'method_pincode'        => 'Introduce un código PIN',
            'method_auth_app'       => 'Código QR (Google 2FA)',
            'pincode_title'         => 'Código PIN',
            'pincode_label'         => 'Introduce un código PIN en tu cuenta para más seguridad, con esta medida protegeras tu cuenta ante posibles accesos por parte de terceros.',
            'fill_pincode'          => 'Código PIN',
            'generate_auth'         => 'Cógido QR (Google 2FA)',
            'generate_auth_label'   => 'Este método es el más seguro. Conecta tu cuenta de ' . Config::site['shortname'] . ' con Google Authenticator en tu teléfono móvil. Una vez te la hayas descargado, simplemente escanea el código QR que se ha generado con la cámara de tu teléfono móvil.',
            'link_account'          => '¡Conéctalo a tu cuenta!',
            'link_account_label'    => 'Una vez escaneado el código QR, dale al botón Guardar y cada vez que te conectes se generará en la app de Google Authenticator un código aleatorio que deberás introducir para iniciar sesión.',
            'save'                  => 'Guardar'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Club benefits', // La tienda está deshabilitada
            'club_buy'            => 'Purchase ' . Config::site['shortname'] . ' Club', // La tienda está deshabilitada
            'unlimited'           => 'Unlimited', // La tienda está deshabilitada
            'more_information'    => 'More information', // La tienda está deshabilitada
            'content_1'           => 'Do you have a question or problem with a purchase?', // La tienda está deshabilitada
            'content_2'           => 'Do not hesitate to contact customer service via the', // La tienda está deshabilitada
            'help_tool'           =>  Config::site['shortname'] . ' Help Tool', // La tienda está deshabilitada
            'random_club_users'   => 'Random ' . Config::site['shortname'] . ' Club members', // La tienda está deshabilitada
            'desc'                => 'Here you can buy ' . Config::site['shortname'] . ' club for real money. With club you can buy exclusive items.' // La tienda está deshabilitada
        ),
        'shop_history' => array (
            'buy_history'         => 'Purchase history', // La tienda está deshabilitada
            'product'             => 'Product', // La tienda está deshabilitada
            'date'                => 'Date', // La tienda está deshabilitada
            'buy_history_empty'   => 'You do not have a purchase history yet.', // La tienda está deshabilitada
            'buy_club'            => 'Purchase ' . Config::site['shortname'] . ' Club', // La tienda está deshabilitada
            'content_1'           => 'Do you have a question or problem with a purchase?', // La tienda está deshabilitada
            'content_2'           => 'Do not hesitate to contact customer service via the', // La tienda está deshabilitada
            'help_tool'           =>  Config::site['shortname'] . ' Help Tool', // La tienda está deshabilitada
            'title'               => 'My Purchase history', // La tienda está deshabilitada
            'desc'                => 'You see here all the purchases you have made', // La tienda está deshabilitada
			'title_draw'          => 'Draw your badge', // La tienda está deshabilitada
            'draw_desc'           => 'Draw your own badge for points' // La tienda está deshabilitada
        ),
        'shop_offers' => array (
            'back'              => 'Back', // La tienda está deshabilitada
            'buymethods'        => 'Payment methods', // La tienda está deshabilitada
            'for'               => 'for', // La tienda está deshabilitada
            'or_lower'          => 'or lower', // La tienda está deshabilitada
            'loading_methods'   => 'The payment methods are being loaded...', // La tienda está deshabilitada
            'store'             => 'Store' // La tienda está deshabilitada
        ),
        'shop' => array (
            'title'             => 'Select a product', // La tienda está deshabilitada
            'more_information'  => 'More information', // La tienda está deshabilitada
            'content_1'         => 'Do you have a question or problem with a purchase?', // La tienda está deshabilitada
            'content_2'         => 'Do not hesitate to contact customer service via the', // La tienda está deshabilitada
            'help_tool'         =>  Config::site['shortname'] . ' Help Tool', // La tienda está deshabilitada
            'not_logged'        => 'Oops! You\'re not logged in.', // La tienda está deshabilitada
            'have_to_login'     => 'You must be logged in to visit the ' . Config::site['shortname'] . ' Shop.', // La tienda está deshabilitada
            'click_here'        => 'Click here', // La tienda está deshabilitada
            'to_login'          => 'to log in.', // La tienda está deshabilitada
            'store'             => 'Store', // La tienda está deshabilitada
            'desc'              => 'Here you can buy credits for real money, with this you can buy exclusive items in our catalogue' // La tienda está deshabilitada
        ),
        'games_ranking' => array(
            'title'             => 'Los mejores jugadores',
            'desc'              => 'Aquí encontrarás una lista de los mejores jugadores basándose en sus duckets, créditos, diamantes, puntos de recompensas y respetos.'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Points',
        'hotelapi' => array (
            'disabled' => 'Cannot process request because the hotelapi is turned off!'
        ),
        'dialog' => array (
            'logged_in'             => 'Para ver esta página necesitas estar conectado',
            'not_logged_in'         => 'You do not have to be logged in to visit this page!'
        ),
        'notification' => array (
            'message_placed'        => '¡Tu comentario ha sido publicado con éxito!',
            'message_deleted'       => '¡Tu comentario ha sido borrado con éxito!',
            'invisible'             => 'This is made invisible!',
            'profile_notfound'      => 'Unfortunately.. we could not find the ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'You do not have permission.',
            'already_liked'         => '¡Ya has indicado que este mensaje te gusta!',
            'liked'                 => '¡Has indicado que este mensaje te gusta!',
            'banned_1'              => '¡Has sido baneado por incumplir las normas de ' . Config::site['shortname'] . '! El motivo del baneo ha sido:',
            'banned_2'              => 'Duración:',
            'something_wrong'       => '¡Ha ocurrido un error, si el error persiste y no estas haciendo nada raro, contacta con algún Staff!',
            'room_not_exists'       => 'This room does not exist!',
            'staff_received'        => 'Thanks! The ' . Config::site['shortname'] . ' Staff has received this!',
            'not_enough_points'     => 'You do not have enough points.',
            'topic_closed'          => 'You cannot respond to a topic that has been closed!',
            'post_not_allowed'      => 'You don\'t have access to create a post in this forum!',
			'draw_badge_uploaded'   => 'Your badge has been submitted and is ready for review!'
        ),
        'pattern' => array (
            'can_be'                => 'debe tener como máximo',
            'must_be'               => 'debe tener al menos',
            'characters_long'       => 'caracteres',
            'invalid'               => 'does not meet the requirements!',
            'invalid_characters'    => 'contains invalid characters!',
            'is_required'           => '¡Rellena todos los campos!',
            'not_same'              => 'no coinciden',
            'captcha'               => 'Recaptcha was entered incorrectly!',
            'numeric'               => 'must be numeric!',
            'email'                 => 'incorrecto'
        ),
        'title' => array (
            'home'              => 'Una comunidad increíble, Habbo Creditos, HC y más gratis',
            'lost'              => 'Not found',
            'registration'      => '¡Regístrate ahora!',
            'hotel'             => 'Client',

            'password' => array (
                'claim'    => 'Forgot password?', // Esta opción está deshabilitada ya que necesitamos de servidor mail
                'reset'    => 'Change password', // Esta opción está deshabilitada ya que necesitamos de servidor mail
            ),
            'settings' => array (
                'index'         => 'Mis ajustes',
                'password'      => 'Cambiar contraseña',
                'email'         => 'Cambiar correo electrónico',
                'namechange'    => 'Change ' . Config::site['shortname'] . 'name' // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
            ),
            'community' => array (
                'index'     => 'Community',
                'photos'    => 'Galería de fotos',
                'staff'     => 'Equipo Staff',
                'team'      =>  Config::site['shortname'] . ' Team', // Esta opción está deshabilitada
                'fansites'  => 'Fansites', // Esta opción está deshabilitada
                'value'     => 'Catalogue Marketplace', // La tienda está deshabilitada
                'forum'     => 'Grupos'
            ),
            'games' => array (
                'ranking'   => 'Top usuarios'
            ),
            'shop' => array (
                'index'     =>  Config::site['shortname'] . ' Store', // La tienda está deshabilitada
                'history'   => 'Purchase history', // La tienda está deshabilitada
                'club'      =>  Config::site['shortname'] . ' Club' // La tienda está deshabilitada
            ),
            'help' => array (
                'index'     => 'Help Tool',
                'requests'  => 'Soporte de Ayuda',
                'new'       => 'Soporte de Ayuda'
            ),
            'jobs' => array (
                'index'     => 'Vacantes disponibles - ' . Config::site['shortname'] . '',
                'apply'     => 'Respond to vacancy'
            )
        )
    ),
    'login' => array (
        'invalid_password'          => '¡Vaya...! El usuario y la contraseña no coinciden.',
        'invalid_pincode'           => 'El código pin no coincide con en el que se ha establecido para esta cuenta, intentalo nuevamente.',
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'name is contrary to the ' . Config::site['shortname'] . ' Rules.',
        'username_exists'           => 'Ya existe un usuario con este nombre, ¡prueba otro diferente!',
        'email_exists'              => 'Ya existe un usuario con este correo electrónico, ¡prueba otro diferente!',
        'too_many_accounts'         => 'Hay demasiadas cuentas asociadas a esta IP'
    ),
    'claim' => array (
        'invalid_email'             => 'This e-mail address does not match that of this ' . Config::site['shortname'] . ' ID.', // Esta opción está deshabilitada ya que necesitamos de servidor mail
        'invalid_link'              => 'This link has expired. Request your password again to change your password.', // Esta opción está deshabilitada ya que necesitamos de servidor mail
        'send_link'                 => 'We have just sent you an e-mail! Received nothing? Then check the junk e-mail folder.', // Esta opción está deshabilitada ya que necesitamos de servidor mail
        'password_changed'          => 'Your password has been changed. You can now log in again!', // Esta opción está deshabilitada ya que necesitamos de servidor mail

        'email'  => array (
            'title'                 => 'Change your password.'
        )
    ),
    'settings' => array (
        'email_saved'               => '¡Tu correo electrónico ha sido cambiado con éxito!',
        'password_saved'            => '¡Tu contraseña ha sido cambiada con éxito! En unos momentos, tendrás que iniciar sesión nuevamente...',
        'preferences_saved'         => '¡Se han modificado tus ajutes con éxito!',
        'current_password_invalid'  => '¡Vaya...! El usuario y la contraseña no coinciden.',
        'user_is_active'            => 'This ' . Config::site['shortname'] . ' may still be active!',
        'name_change_saved'         => 'Your application will be processed, 50 gotw-points have been debited.', // Esta opción está deshabilitada ya que no quiero que puedan cambiarse el nombre de usuario.
        'invalid_secretcode'        => 'Introduce el código correcto generado por Google Authenticator',
        'enabled_secretcode'        => '¡La seguridad en dos pasos ha sido habilitada con éxito! En unos momentos, tendrás que iniciar sesión nuevamente...',
        'disabled_secretcode'       => '¡La seguridad en dos pasos ha sido deshabilitada con éxito!'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'Transaction could not be processed!',  // La tienda está deshabilitada
            'invalid_code'          => 'The code you entered is incorrect.',  // La tienda está deshabilitada
        ),
        'club' => array (
            'already_vip'           => 'You are an unlimited member of the ' . Config::site['shortname'] . ' Club.',  // La tienda está deshabilitada
            'purchase_success'      => 'Yeah! You are now a member of the ' . Config::site['shortname'] . ' Club for 31 days.'  // La tienda está deshabilitada

        ),
        'marketplace' => array(
            'expired'               => 'Item is expired, its not possible to purchase this item!', // La tienda está deshabilitada
        )
    ),
    'help' => array (
        'ticket_created'            => '¡Tu ticket ha sido creado con éxito! Puedes revisarlo eventualmente para ver su evolución',
        'already_open'              => 'You still have an outstanding ticket! When this has been treated you can create a ticket again.',
        'no_answer_yet'             => 'You can only respond once an ' . Config::site['shortname'] . ' Staff has answered your ticket.',
    ),
    'forum' => array (
        'is_sticky'                 => '¡Esta acción ha sido realizada con éxito!',
        'is_closed'                 => '¡El estado del hilo ha cambiado con éxito!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Panel de Control'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Username'
        )
    )
);
