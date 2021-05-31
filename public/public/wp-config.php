<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'petbooking_blog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'petbooking');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'p3tb00k1ng');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql743.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZTDI8p|_H7$:U~ jS>JBJn(nB/ih$E.9#2L|eBMC`p}NtNr_fz_,WJhMyNMq] Sy');
define('SECURE_AUTH_KEY',  'mu9zTxz(Ff%VRbYlh!y1yOf?tH8(kuzuXVek$CQ$d>u!vO>w,!FLW+F#.j [_NdT');
define('LOGGED_IN_KEY',    '6rpg2rJNT0]qJ3N7J[XJW,3Bz!R5/a}.N?Fe[cnTA34R}AUN@<bRk;QkJ4XNrta_');
define('NONCE_KEY',        ')e2&sD&~t*yU2>:=bUCYGu%PkD<^7SV2) 3k.i7p3@l7qK6Q$wd)guLNJ<l{& zu');
define('AUTH_SALT',        'P-w: k+[uC,Qz>HBQ_xT0H.Nd,(5{ctD+-+jak1,.VzrZ/}T(EG}IPQ;I9N.~kn1');
define('SECURE_AUTH_SALT', 'FUd G`Euv0SQe[V(H( {SbSJf05(FWv_0Mqf*h6pSflFyo3mE2goOEE)/hF`<4&e');
define('LOGGED_IN_SALT',   'o/4Ng=@<rid+j_s!NGJ3$R-XiF/IB_;}W!{-Wg~bQle2;GX{1$[/7*%?r!H{mJzn');
define('NONCE_SALT',       '^e^DM }*l0`dJ3n^y0/eLeW]?QlNT+U9&*uL(gZVnE{qp}F``t>xs7>tSb8I_iTg');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'apswp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
