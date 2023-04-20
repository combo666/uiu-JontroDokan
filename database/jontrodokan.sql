-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 09:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jontrodokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bolg_title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `project_details` varchar(255) NOT NULL,
  `components` varchar(255) NOT NULL,
  `publish_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_items`
--

CREATE TABLE `lab_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `cus_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` text NOT NULL,
  `post_image` text DEFAULT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) DEFAULT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `is_featured` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `is_featured`) VALUES
(1, 1, 'Christmas Greetings - XXL Chatbot', 'shayanta shopnil', '2023-04-04', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex magna, interdum quis diam non, viverra egestas neque. Praesent elementum quis urna non facilisis. Nullam placerat pretium dui, sit amet fringilla felis sodales vitae. In ex orci, dapibus dapibus venenatis lobortis, euismod lacinia felis. Duis nec sem id velit fermentum ornare id et ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie, metus non rutrum bibendum, lorem leo rutrum lectus, pharetra facilisis augue dui id augue. Vivamus viverra semper odio, a ultrices diam sagittis sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas pulvinar congue enim, non fringilla velit eleifend sed. Pellentesque gravida egestas sollicitudin. Phasellus in placerat velit. Nullam malesuada lacinia ex a fermentum. Sed nisl dui, vestibulum ut fermentum at, semper eget leo. Vestibulum faucibus, nisl quis rutrum porttitor, velit nisi ullamcorper nibh, varius cursus dolor justo eu sem. Donec molestie accumsan ipsum, et aliquet magna.\r\n\r\nNulla imperdiet tempor massa quis condimentum. Aliquam volutpat eros eu ligula facilisis lobortis. Nullam eget ornare elit. Nunc id nisi mattis, fermentum ante sit amet, dapibus massa. Aenean blandit ligula sit amet pulvinar venenatis. Ut eu massa et lectus rhoncus elementum. Cras finibus imperdiet vulputate. Morbi eu tempus mi, eget vestibulum ligula. Fusce a sapien et lectus cursus mollis.\r\n\r\nDonec vitae nulla interdum, maximus arcu a, eleifend tortor. Nullam sed malesuada mauris. Mauris aliquet tristique elit, ac maximus leo ultrices non. Vivamus risus velit, pellentesque eu dictum non, placerat id nunc. Suspendisse tristique et turpis sit amet ullamcorper. Mauris rutrum sagittis nunc, in scelerisque nisi malesuada a. Aenean dictum nulla porta ex condimentum eleifend. Nunc feugiat auctor risus sit amet feugiat. Sed scelerisque arcu nunc, ullamcorper luctus est maximus in. Cras porta interdum condimentum. Aenean bibendum purus eros, vitae ultrices nisl convallis et. Phasellus sodales eget libero eget condimentum. Etiam ac est egestas, pharetra erat ac, accumsan sapien. Duis suscipit ut sapien quis convallis.', 'arduino, shayan', 0, 'draft', 1),
(3, 2, 'dasdnasdnakjdnakjndkjasndas', 'niggy s', '2011-04-23', 'wallpaperflare.com_wallpaper.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores tempora optio voluptas facilis consectetur architecto, ut quas vitae asperiores, praesentium, soluta ex at sint quam iusto iste ipsam cumque facere?\r\nRepellendus quisquam expedita officia fuga. Fugit ipsum dolores aliquam accusamus nulla omnis itaque aliquid sed libero, cupiditate quam placeat ipsam? Molestias magnam quidem molestiae ea, dolores tempore possimus soluta nemo!\r\nIpsum maiores expedita eveniet harum ex neque eos in perspiciatis soluta laboriosam, unde sed recusandae! Officia itaque autem accusamus quia adipisci in illum doloribus reprehenderit, hic et, quisquam, earum voluptatem?\r\nPraesentium aliquid repudiandae facilis nobis iste doloremque suscipit magni minima at, ab ad iusto nulla iure sit dignissimos mollitia error debitis alias, esse dolorum deleniti tenetur consequuntur delectus ipsa? Hic!\r\nRepellendus in delectus nemo omnis adipisci. Nam tenetur deleniti sed amet consectetur nemo ab odio atque autem nisi sit modi ipsum odit, vitae, molestiae minus alias eos fugit! Quae, perspiciatis!\r\nDebitis saepe culpa nostrum nesciunt! Ullam facilis magnam, reiciendis repellendus voluptatibus, consequatur molestias cupiditate veritatis dolore alias fugit quis? Ex aliquid dolore saepe animi voluptatibus dicta vitae distinctio repellendus pariatur?\r\nDelectus, at ab hic ratione suscipit dignissimos provident obcaecati neque corporis iusto voluptatibus recusandae placeat, quae fugit necessitatibus dolore. Facere architecto beatae exercitationem explicabo accusantium impedit totam quae blanditiis vel?\r\nVoluptas facere distinctio harum expedita in quas sed consequuntur et incidunt. Architecto voluptatibus rerum facere sunt amet fuga at! Quia modi sint quae? Error dolore in fuga excepturi vero minus!\r\nNon placeat aliquid magni possimus. Libero laboriosam et sed distinctio cum, nemo ipsa aut veniam blanditiis voluptate explicabo ea, omnis natus facere harum? Optio, cumque. Ipsum dolor dolorum placeat distinctio.\r\nA pariatur nulla soluta adipisci reprehenderit facilis exercitationem vero. Doloribus exercitationem dignissimos deleniti nemo illo fugit vel quibusdam. Dolorum aspernatur velit inventore sunt incidunt molestiae impedit deserunt quod repellat ipsam?\r\nCorporis itaque optio expedita labore incidunt. Ducimus sunt qui numquam culpa, quae aliquam libero minus vel dolore reiciendis provident, alias tempore iusto rem eaque animi repellat, expedita incidunt. Similique, voluptate.\r\nSunt nesciunt excepturi dicta, doloremque voluptas inventore repellendus eveniet atque sequi? Quam accusantium laboriosam eveniet a voluptatibus praesentium! Enim omnis quibusdam facilis quasi ratione corrupti ut adipisci ipsa vitae atque.\r\nNam laboriosam dolorem repudiandae facere ea ipsam soluta blanditiis sunt laudantium. Vel dolores quibusdam voluptate saepe adipisci blanditiis, nam sequi delectus inventore dicta architecto consequatur dolor et nobis quo iste?\r\nQuam ipsam saepe distinctio, numquam autem expedita inventore eaque pariatur quia quos consectetur unde minus debitis. Quis dolore placeat dolor nisi, nesciunt vero ipsam a nostrum laboriosam, rem optio similique.\r\nRepudiandae voluptatum adipisci voluptatem, in nesciunt qui blanditiis quasi dicta similique officia placeat deserunt! Qui vero, exercitationem earum eius doloremque odio neque tenetur architecto, omnis necessitatibus molestiae in magnam tempore.\r\nFugiat tempore unde corrupti provident distinctio soluta nostrum perferendis sunt, tempora quisquam blanditiis ipsam vero explicabo. Possimus hic ipsam ut assumenda obcaecati, ea soluta veniam a recusandae est nisi tenetur.\r\nQui natus blanditiis, eaque nihil deleniti adipisci animi quas at? Quo porro officiis natus eaque molestias ducimus laboriosam, eligendi reiciendis itaque aut, nulla architecto commodi velit, voluptatum ea temporibus delectus!\r\nVel, ipsa recusandae laboriosam molestiae sint nihil! Voluptatibus excepturi voluptate sunt dolores similique. Tempora, in facere at atque, esse nobis, et suscipit exercitationem unde tempore tenetur sapiente repudiandae rem ea.\r\nEveniet similique officia ullam animi delectus facere sunt aliquam voluptatibus ducimus fuga, odio praesentium recusandae totam, fugiat asperiores, voluptates error optio! Quidem maxime dolor eveniet corrupti dolore numquam iusto consectetur.\r\nNon in ducimus incidunt. Quod eum voluptatibus tenetur sed maiores doloribus ipsum natus ipsa! Fugit dolorem quia et fugiat labore facilis, natus praesentium, sequi ab ex sunt commodi nulla modi.\r\nEt, magnam aliquam doloremque nulla repellendus laborum quia voluptatem ratione nisi, unde distinctio totam debitis quo perspiciatis beatae corrupti vel odio asperiores assumenda fugiat cum. Sit perspiciatis nam beatae eveniet.\r\nCum, id vel eum nihil iure iste explicabo itaque architecto minus sint hic omnis possimus ut. Nam dolorum, dolor, ut dolores aperiam esse voluptas quaerat omnis voluptatibus aspernatur ea temporibus.\r\nProvident sint cum laboriosam laudantium harum repellendus officia earum, quas deserunt voluptates? Vel, quaerat? Quo amet et excepturi ea, aut sit, perspiciatis porro delectus pariatur repellat nam nobis, similique maxime.\r\nItaque, numquam. Rerum totam expedita fugiat enim hic blanditiis explicabo voluptas. Impedit obcaecati enim qui at recusandae laudantium nulla repellat temporibus, asperiores quasi ea, ullam expedita nihil repellendus accusantium maxime?\r\nNon doloremque numquam architecto quo illum vel, ullam perspiciatis modi? Dicta voluptatum atque enim quidem accusantium, modi est consequatur laboriosam perferendis impedit magnam similique, adipisci laborum! Pariatur ab minima nisi!\r\nLaborum et ipsum ab reiciendis cupiditate nostrum soluta aperiam! Cum exercitationem quod provident, fuga rerum suscipit dolores, quo voluptatum tenetur ducimus veritatis porro, neque eveniet nesciunt aperiam cumque saepe ratione.\r\nAd in tenetur dicta officia beatae ducimus exercitationem, quisquam aliquam rerum voluptatem architecto possimus quo recusandae alias iste facilis quae quasi nostrum voluptatum! Mollitia quia eligendi doloremque excepturi, numquam adipisci!\r\nNon, velit accusamus deleniti quaerat doloremque enim ullam repudiandae eius harum assumenda culpa perspiciatis suscipit libero modi dolorem vitae ab alias repellendus eligendi ratione. Eos error sequi praesentium enim ab.\r\nSaepe, voluptatum. Inventore natus at quos beatae. Quam ipsa rem vero, harum, placeat voluptatibus et quis cumque ducimus eius autem, iure suscipit? Hic, recusandae voluptates? Hic, sunt minus. Laboriosam, maxime.\r\nEos, sequi, facere soluta voluptate, dolor corporis dolore amet accusamus iusto cum quaerat? Odit voluptas laboriosam sequi assumenda et optio ullam dolore, hic eius quisquam eaque voluptatibus vel totam nesciunt!\r\nBeatae cupiditate corporis dolorum necessitatibus fugiat, exercitationem, amet vitae repudiandae magnam qui quibusdam praesentium, quam non nesciunt nisi ut! Autem nihil recusandae facere nam reiciendis impedit sit minima fuga pariatur.\r\nAb odit ratione possimus magni praesentium repellendus repellat incidunt repudiandae maxime! Placeat, non ducimus maxime atque sapiente quas aliquid, nemo illo facilis, et cupiditate possimus quis provident quidem facere incidunt!\r\nCupiditate placeat vitae facere officia ea similique, enim minus? Quod fugit corrupti mollitia saepe numquam libero! Ratione, iure temporibus? Non, officia. Consequuntur, nam! Ipsum, ducimus ea velit non minus possimus.\r\nMolestias, illum itaque! Eaque laudantium, repellat fuga veritatis cum quisquam aperiam, deleniti saepe ipsa similique accusamus excepturi dolorum eligendi in, beatae neque? Neque enim nihil perspiciatis quisquam maiores, praesentium recusandae?\r\nEveniet dolores iure aliquam ad cum soluta rerum sequi sed quod. Repellat distinctio sunt nobis quis quo! Veniam cupiditate voluptas tempore officiis sed aut perferendis fuga velit ratione debitis! Ad.\r\nAccusantium accusamus ea corporis aut rerum distinctio vitae. Doloribus asperiores, beatae aspernatur perspiciatis molestias accusamus eligendi sit earum quae incidunt corrupti facilis, cumque dignissimos minus, ab impedit expedita magnam veritatis.\r\nCum impedit alias excepturi maxime debitis, consequuntur, autem dignissimos accusamus cupiditate dolorum quos minima doloremque quam itaque! Eligendi, commodi vitae. Nihil quas, architecto quis numquam error quidem iste nulla. Ex?\r\nNesciunt ut numquam vel aspernatur architecto tenetur eligendi eveniet ducimus officia temporibus nemo veniam sint, provident esse culpa! Ad voluptas placeat repudiandae minus eos laborum quasi! Quos voluptatibus perspiciatis fugiat.\r\nQuisquam iusto eos voluptates, odit natus saepe quo quidem est ab tenetur provident magnam, modi reprehenderit cupiditate consectetur quia dolorem, repellat aperiam temporibus earum voluptatibus cum. Explicabo qui quisquam voluptatibus?\r\nMolestiae sint necessitatibus dignissimos enim placeat aut quas, porro asperiores maxime delectus odit. Mollitia assumenda atque, dolore provident dignissimos maiores. Culpa velit vitae esse eligendi aperiam quas assumenda ducimus error.\r\nId nisi facilis necessitatibus est, voluptates hic tenetur ducimus. Animi soluta amet accusantium ratione itaque deserunt, error, exercitationem ipsam temporibus, mollitia obcaecati. Excepturi corrupti est quasi alias animi error maiores.\r\nVoluptate odio possimus tempore error deserunt, soluta maxime eaque labore reiciendis quas alias nemo ipsam, corrupti voluptatibus nulla nam praesentium accusamus suscipit harum eius excepturi quos. Officiis ipsum explicabo delectus!\r\nFugit quasi neque dolorem eligendi maiores, sunt ducimus quos nisi aliquam error ipsum rem consectetur repudiandae porro accusantium officia aperiam inventore qui unde officiis sit expedita. Eligendi atque quis praesentium?\r\nQuo modi porro error? Iusto fugiat at quod inventore a quibusdam cum consequatur ipsum nam harum, quae praesentium? Nisi minus corporis repudiandae modi cupiditate hic exercitationem eius quae, id sapiente!\r\nMolestiae pariatur neque minima laborum? Voluptatem cupiditate eius fuga maiores modi, officia nam eaque non, molestias assumenda quod ea ipsa numquam vitae, quibusdam laboriosam eveniet cum beatae. Voluptatibus, alias odio!\r\nOfficia dolore omnis maiores? Numquam cupiditate nihil magni commodi debitis exercitationem beatae, iste corrupti et doloremque voluptatum iure, assumenda explicabo molestiae facilis. Iure quidem sint, architecto dolorem in quo quod?\r\nDeleniti cum eligendi saepe esse illo tenetur ea maiores facere commodi sed voluptas nostrum quibusdam dolores, reprehenderit illum ipsum amet nihil quam? Officiis soluta expedita aspernatur maxime totam similique enim?\r\nAb corrupti veniam voluptate iusto ratione consectetur aut, culpa, eaque cupiditate, accusantium consequuntur quibusdam obcaecati placeat quia! Odit quas perspiciatis distinctio nihil mollitia ex beatae! Maxime iure aliquid itaque facilis?\r\nSapiente necessitatibus perferendis itaque et, distinctio nemo non reiciendis eos. Itaque ipsa placeat numquam. Iusto enim, quo doloremque recusandae odit, nobis consectetur eaque officiis tempore fuga quam reiciendis laboriosam non!\r\nVoluptatum corporis culpa nihil repellendus molestias nesciunt aliquam laboriosam. Incidunt praesentium nemo odio similique cupiditate neque, aut accusantium impedit aperiam nesciunt quod ut autem nobis architecto eligendi! Optio, illo consequatur!\r\nAtque ducimus obcaecati dolor excepturi, modi ipsa sed quod nesciunt consectetur nulla, commodi maiores sint incidunt cum esse vitae autem voluptas corporis ipsam possimus laborum. Sunt consectetur cum nesciunt modi!\r\nSuscipit repellat dolorem iure tempore praesentium laudantium asperiores quae reiciendis voluptatem sapiente quas assumenda deserunt officia, explicabo ipsam, quos sint! Eveniet neque ut temporibus aliquam dolores nihil omnis voluptates odit.\r\nEst quos perferendis voluptas neque! Molestias error ad earum porro omnis atque sequi rem soluta doloribus voluptatum! Pariatur nesciunt tempore modi rerum, doloremque numquam voluptatibus velit laudantium, corrupti fuga sequi?\r\nEaque velit ea, perferendis inventore, vitae temporibus reprehenderit quasi, exercitationem pariatur molestias magnam assumenda asperiores necessitatibus rerum excepturi recusandae architecto sed eos accusamus quae tenetur praesentium id similique? Earum, perspiciatis.\r\nReprehenderit in non ab aliquam totam earum et accusantium facere eos tenetur, minima laboriosam veniam rem architecto? Dolorum, facere dicta suscipit sint tempora, illum pariatur dolores earum ex iste labore.\r\nConsequatur molestiae adipisci distinctio sint incidunt voluptas praesentium dicta molestias aliquam dolore excepturi in ullam quae perferendis, temporibus maiores accusamus veritatis reprehenderit architecto at eligendi? Est voluptatum esse at eveniet!\r\nVoluptates eius minima sed suscipit amet sapiente quidem commodi tenetur dicta deserunt molestias expedita natus nostrum molestiae cumque soluta exercitationem nam repellat dolor, a assumenda nesciunt sunt facilis! Facere, reprehenderit?\r\nRepudiandae libero ducimus error ex asperiores enim suscipit praesentium quibusdam, animi voluptatem. Aperiam ipsa ut beatae itaque dolor, dolorum laborum saepe nam magni facere culpa! Sunt nulla pariatur cum consequuntur?\r\nAd rem quod molestiae veniam eius, at asperiores tenetur iste ea placeat praesentium ducimus quae cupiditate atque delectus incidunt odit soluta dolor aspernatur, vero ex. Quia quod nostrum aut asperiores.\r\nObcaecati eius quasi provident rerum nemo fugiat maiores perferendis excepturi nobis maxime sequi aliquam exercitationem, minima impedit quisquam voluptatum quae eligendi commodi quod. Voluptate sunt ducimus adipisci, consectetur fugit molestias.\r\nEa veniam quo laudantium cumque assumenda sapiente vitae nihil, voluptatibus praesentium quos blanditiis. Nesciunt ducimus quo inventore ipsam amet ut velit id accusamus dignissimos enim consequuntur expedita, at illo autem!\r\nSequi eligendi qui vel aspernatur voluptatibus accusantium harum quos amet libero mollitia voluptas itaque cupiditate facilis aliquid ipsum doloribus ut quis, aperiam quae ab laborum, soluta minima. Doloremque, perspiciatis a?\r\nQuidem esse alias dolorum maxime voluptatum rerum, totam deleniti suscipit numquam molestiae nihil? Provident eaque officiis exercitationem consectetur, quisquam quaerat voluptates id rem eos excepturi nihil dolores facere quas magnam.\r\nNesciunt, inventore eligendi! Nobis commodi eos a voluptas aperiam deserunt consectetur quidem perferendis illo debitis tempora alias, consequatur ducimus. Enim temporibus eaque non nesciunt explicabo? Est sapiente sint maxime aperiam.\r\nAmet praesentium eveniet maiores fugiat vel, molestiae voluptatum accusantium dolore vitae alias qui earum. Porro rem a aliquam perferendis. Architecto maiores distinctio voluptate eveniet laudantium quia rerum ut. Modi, esse.\r\nCum ullam doloremque iure optio, odit unde, quasi laborum doloribus molestiae harum quisquam magnam provident nostrum nam obcaecati placeat sint temporibus tempore saepe perferendis quos officia iusto deserunt. Non, saepe.\r\nNam mollitia distinctio id ab ratione enim vel sapiente velit officia maxime! Magni quos sed minima labore deserunt quam iusto voluptates voluptatibus. Eaque ducimus consequatur in. Illum impedit repudiandae aliquam?\r\nIncidunt quae nulla sapiente officia. Accusantium eos assumenda quos tenetur, alias ratione quod dolores eligendi nihil ipsum voluptate tempora reiciendis. Expedita deleniti amet enim. Totam, obcaecati! Hic labore voluptatem quos.\r\nIncidunt a repudiandae quas eveniet officiis autem. Cum, quas tempore! Impedit in pariatur minus quasi officia cum facilis veniam temporibus, voluptas consequuntur provident dolores reprehenderit assumenda corrupti numquam labore esse!\r\nOfficiis velit natus consequatur quibusdam voluptates itaque, soluta consequuntur quam similique unde aliquam odit possimus voluptatum consectetur beatae quia alias! Temporibus molestias sit eos eaque. Accusamus veritatis asperiores maiores libero.\r\nQuasi nulla odio tenetur nesciunt consectetur dolor id quisquam, autem recusandae possimus officia doloremque! Tempore, in quas debitis temporibus veritatis quidem autem atque quis numquam qui hic tempora voluptas quos.\r\nDeserunt, earum. Magni laborum quasi molestias saepe, esse nulla nesciunt nihil amet quam dolorem magnam quo autem incidunt natus ratione earum inventore explicabo blanditiis officia minima deleniti similique nam modi?\r\nPorro, corporis et, sunt eaque blanditiis rem, sequi maiores dolor modi vitae doloribus magni expedita culpa. Maiores, consequatur facere quisquam non cupiditate, tempore tenetur debitis, sequi enim iusto similique adipisci?\r\nSunt praesentium sapiente cupiditate odit voluptas sit nobis alias assumenda quisquam aliquam velit libero expedita aliquid blanditiis eligendi, ad dolorum. Error perspiciatis tempore ipsa quia magni a voluptates laboriosam odio.\r\nLaboriosam voluptate eos animi quod? Nulla eos odio ex eligendi! Eveniet facilis odio odit sunt, aliquam consequatur molestiae repudiandae laboriosam sint accusantium, minima voluptatum unde minus iusto cupiditate nulla soluta?\r\nSaepe a, doloribus excepturi beatae quasi quod quidem officia illo, minus vitae numquam perferendis eius! Eligendi, ab? Autem expedita aut sequi maxime quam id error vel, dolor, magni quas iure?\r\nEveniet, optio atque. Quas quasi corrupti incidunt necessitatibus veritatis! Provident accusamus, impedit praesentium suscipit aspernatur, omnis nisi ad sit perferendis aliquam eius laboriosam, soluta doloremque! Iure illum saepe vero veniam.\r\nCommodi sequi a aliquam dolor explicabo voluptates earum quidem tenetur. Architecto, voluptatem quibusdam. Aspernatur tempore ea tempora enim odit laboriosam, vitae a, harum odio eius nostrum aperiam laborum, ex id.\r\nTenetur quo aperiam illo optio, facere autem molestiae laborum unde enim at est dolor temporibus perspiciatis architecto. Distinctio inventore aspernatur dolore voluptatibus. Aliquid sapiente nisi eos iure ullam dolores minima!\r\nConsequatur dicta quasi asperiores, minus provident suscipit exercitationem est velit natus, enim cupiditate error reprehenderit numquam officia unde? Minima doloremque harum qui sunt magnam. Ut temporibus adipisci recusandae eaque laborum!\r\nArchitecto accusamus, totam quasi mollitia libero soluta eaque explicabo nisi accusantium eius fuga ipsum sequi assumenda voluptates ipsa illo, corrupti voluptatum esse dicta tempore laborum est dolor. Fuga, dolorem ducimus.\r\nEius dignissimos quisquam, omnis maiores nesciunt incidunt, sapiente hic nihil, ea amet modi tempore deserunt possimus quae illo officiis quam veniam tempora animi! Asperiores soluta iste cum hic, corporis qui?\r\nNumquam modi saepe laboriosam non exercitationem, expedita totam fugiat beatae dolores, laborum earum vero libero a impedit quos animi odio architecto aliquam autem maiores sit explicabo omnis labore. Autem, aut.\r\nLibero saepe ea autem, repellat facere quisquam delectus magni, eaque qui quibusdam ut. Repudiandae delectus repellendus distinctio recusandae harum porro corporis, optio culpa. Deleniti fuga laudantium sed adipisci quas cum?\r\nItaque asperiores non ducimus minima unde distinctio excepturi, necessitatibus cumque animi reprehenderit aspernatur facere, debitis dolore. Ab commodi ipsam alias nam, culpa delectus adipisci, libero praesentium aut nostrum, sed esse!\r\nAlias nihil, vel provident quae doloremque beatae voluptatem voluptas recusandae tempora, optio amet. Maxime ad ipsum, sunt corporis amet sapiente eius necessitatibus aut nostrum adipisci reprehenderit quae doloribus illo perferendis?\r\nConsectetur modi quae voluptas dicta, rem obcaecati nesciunt expedita. Repudiandae odit sequi maiores consequatur animi facilis aut harum, mollitia error magnam. Nesciunt similique deleniti quos asperiores hic autem adipisci eius!\r\nTenetur ducimus, aperiam tempora ipsa accusantium quae minima ad, suscipit repudiandae eligendi amet, mollitia aliquam illum? Repudiandae, accusamus repellendus alias illum tenetur maiores porro modi praesentium accusantium, reiciendis ut dignissimos!\r\nQuisquam accusamus quasi laboriosam esse quos debitis hic libero, maiores dolorem quae dolores beatae quod perspiciatis atque alias inventore. Cumque at reiciendis voluptatum ipsum nisi? Consequuntur suscipit deleniti sunt magni.\r\nQuisquam quo voluptatibus autem expedita minus magni mollitia provident distinctio incidunt possimus et eveniet, corporis nobis aperiam aspernatur omnis nihil impedit voluptate tempore laudantium! Animi atque voluptas exercitationem soluta nemo.\r\nQuos quisquam vitae, nemo voluptate a facere debitis explicabo impedit amet autem itaque distinctio atque odit recusandae! Est nemo officiis magni architecto, molestias culpa soluta quae maiores numquam, tenetur obcaecati.\r\nSuscipit aspernatur id quidem inventore. Tempore velit iste, quidem inventore laudantium illum et dignissimos a porro consequatur laborum. Alias illum aliquid expedita possimus unde asperiores ducimus eaque fugit soluta repellendus.\r\nCupiditate, eligendi tenetur explicabo nulla inventore porro, exercitationem aperiam voluptatum, impedit deserunt nam enim obcaecati voluptate ipsum vel perspiciatis ea esse labore minima sequi! Porro ipsum voluptas dolorem expedita veniam.\r\nMolestiae officia reprehenderit excepturi commodi voluptatibus fugit, non nam incidunt, dicta aperiam maiores aliquid aut, possimus quo! Accusantium facilis labore distinctio magni nostrum at officiis voluptatum sint, officia corrupti earum.\r\nIncidunt commodi dicta molestias voluptatibus eos enim maiores, numquam optio modi mollitia! Illum tempora unde voluptates itaque sunt delectus voluptatibus maxime. Laudantium, aliquam. Tempora adipisci at accusantium dicta, labore modi?\r\nAccusamus quidem est assumenda dolor explicabo quo nulla ipsa facilis sed officia totam, quia temporibus iure beatae fuga aliquam labore a. Tempore sint saepe deleniti odio. Nulla minima labore id.\r\nQuasi unde labore non commodi numquam, magnam magni cumque nobis dolore qui necessitatibus dicta vero, nihil dolorum? Deleniti facilis maxime, explicabo nihil eius repellat necessitatibus. Error voluptas ipsum tenetur ipsam!\r\nDoloremque tenetur tempora, corporis sed assumenda quibusdam in culpa. Aliquid, necessitatibus alias dolore eius minus voluptatibus optio obcaecati incidunt reprehenderit adipisci quibusdam doloremque cum iusto illum doloribus excepturi facere ut?\r\nMolestias nesciunt harum debitis animi est, quibusdam, vero, asperiores cum eaque consequuntur quos error placeat. Aperiam sint quasi sit. Aliquam eligendi enim odio eaque quas ipsam quo sunt! Sit, dolorem.\r\nDelectus possimus aliquam cupiditate esse corrupti. Asperiores laudantium ea repellat, inventore recusandae vero quibusdam, molestiae et accusantium odio quidem vitae velit eum reprehenderit voluptatum doloremque porro aliquid, accusamus obcaecati? Quidem.', 'niggy, lorem, nowhere', 0, 'draft', NULL),
(6, 1, 'dsadds', 'shopnil', '2011-04-23', 'wallpaperflare.com_wallpaper5.jpg', 'dasdasdasddddasd asaasdas ', 'how, now , kau', 0, 'draft', NULL),
(7, 1, 'dsadds', 'shopnil', '11-04-23', 'maxresdefault.jpg', 'dasdasd', 'dasda', 0, 'draft', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`cat_id`, `cat_title`) VALUES
(1, 'arduino uno'),
(2, 'esp8266'),
(5, 'robotics'),
(8, 'raspberry pie');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(5, 'Ultrasonic sensor', '140', 'sensor.png'),
(6, 'Arduino uno', '780', 'product27.png'),
(7, 'Servo145G', '110', 'servo.png');

-- --------------------------------------------------------

--
-- Table structure for table `recycling`
--

CREATE TABLE `recycling` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recycling`
--

INSERT INTO `recycling` (`p_id`, `p_name`, `p_type`) VALUES
(0, 'Arduino UNO', 'Micro Processor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `gender`) VALUES
(1, 'Sahadt', 'Islam', 'evan@gmail.com', '123', '1234567890', 'male'),
(30, 'Sahadat', 'Islam', 'shadat1124@gmail.com', 'asdf', '01521584524', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_items`
--
ALTER TABLE `lab_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_categories` (`post_category_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recycling`
--
ALTER TABLE `recycling`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
