-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 11:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `bejegyzes`
--

CREATE TABLE `bejegyzes` (
  `id` int(11) NOT NULL,
  `cim` varchar(255) DEFAULT NULL,
  `rovidtartalom` text DEFAULT NULL,
  `tartalom` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `megjelenesdatuma` datetime DEFAULT NULL,
  `szerzo_id` int(11) NOT NULL,
  `temakor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bejegyzes`
--

INSERT INTO `bejegyzes` (`id`, `cim`, `rovidtartalom`, `tartalom`, `image`, `megjelenesdatuma`, `szerzo_id`, `temakor_id`) VALUES
(1, 'Összejött az álomdöntő, a norvégok búcsúztatták a házigazdát', ' Lorem ipsum dolor sit amet, consectetur. ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor mauris placerat arcu vestibulum molestie. Vivamus pretium a diam eu pretium. Integer eget ultricies elit, at iaculis lacus. Sed sit amet enim maximus, finibus quam sit amet, luctus sapien. Cras vitae enim justo. Curabitur congue lacinia quam ac sagittis. Aenean vitae blandit justo. Nam vel ex cursus, vestibulum orci id, venenatis ipsum. Proin sed aliquet libero. Proin ac metus mauris. Donec sodales urna nulla, quis dictum mauris porttitor ac. Etiam vel lectus aliquet, finibus lacus ac, ultricies magna. Ut vestibulum, risus at interdum varius, elit nulla sagittis nulla, in rutrum tellus velit quis tortor. Nam aliquam enim mauris, eu bibendum lacus congue vitae. Nunc eu elit velit.\r\n\r\nNunc enim arcu, dictum ut tristique et, ullamcorper id risus. Mauris bibendum leo lectus, id volutpat lacus luctus vitae. Phasellus vestibulum cursus urna congue convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tincidunt, urna eget gravida mattis, nulla dolor tempus tellus, sit amet tincidunt purus dui non tellus. Pellentesque consectetur malesuada gravida. Vestibulum nisi augue, aliquam dignissim diam ut, blandit elementum dui. Vestibulum purus sem, vehicula in accumsan non, pellentesque sed ligula. In egestas eros eu finibus varius. Aenean gravida dolor sit amet libero vulputate, semper elementum purus condimentum. Fusce pellentesque auctor velit non scelerisque. In elementum posuere orci. Vivamus vitae erat vel mi elementum aliquam et at mauris. ', 'assets/img/blog/1.jpg', '2021-12-19 09:51:05', 1, 3),
(2, 'Máté Csaba szerint Csercseszov lesz a Fradi vezetőedzője', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor mauris placerat arcu vestibulum molestie. Vivamus pretium a diam eu pretium. Integer eget ultricies elit, at iaculis lacus. Sed sit amet enim maximus, finibus quam sit amet, luctus sapien.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor mauris placerat arcu vestibulum molestie. Vivamus pretium a diam eu pretium. Integer eget ultricies elit, at iaculis lacus. Sed sit amet enim maximus, finibus quam sit amet, luctus sapien. Cras vitae enim justo. Curabitur congue lacinia quam ac sagittis. Aenean vitae blandit justo. Nam vel ex cursus, vestibulum orci id, venenatis ipsum. Proin sed aliquet libero. Proin ac metus mauris. Donec sodales urna nulla, quis dictum mauris porttitor ac. Etiam vel lectus aliquet, finibus lacus ac, ultricies magna. Ut vestibulum, risus at interdum varius, elit nulla sagittis nulla, in rutrum tellus velit quis tortor. Nam aliquam enim mauris, eu bibendum lacus congue vitae. Nunc eu elit velit.\r\n\r\nNunc enim arcu, dictum ut tristique et, ullamcorper id risus. Mauris bibendum leo lectus, id volutpat lacus luctus vitae. Phasellus vestibulum cursus urna congue convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tincidunt, urna eget gravida mattis, nulla dolor tempus tellus, sit amet tincidunt purus dui non tellus. Pellentesque consectetur malesuada gravida. Vestibulum nisi augue, aliquam dignissim diam ut, blandit elementum dui. Vestibulum purus sem, vehicula in accumsan non, pellentesque sed ligula. In egestas eros eu finibus varius. Aenean gravida dolor sit amet libero vulputate, semper elementum purus condimentum. Fusce pellentesque auctor velit non scelerisque. In elementum posuere orci. Vivamus vitae erat vel mi elementum aliquam et at mauris. ', 'assets/img/blog/2.jpg', '2021-12-12 09:51:05', 1, 1),
(3, 'A világ legnépesebb országa továbbra sem tud kiállítani még 11 jó játékost sem', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor mauris placerat arcu vestibulum molestie.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor mauris placerat arcu vestibulum molestie. Vivamus pretium a diam eu pretium. Integer eget ultricies elit, at iaculis lacus. Sed sit amet enim maximus, finibus quam sit amet, luctus sapien. Cras vitae enim justo. Curabitur congue lacinia quam ac sagittis. Aenean vitae blandit justo. Nam vel ex cursus, vestibulum orci id, venenatis ipsum. Proin sed aliquet libero. Proin ac metus mauris. Donec sodales urna nulla, quis dictum mauris porttitor ac. Etiam vel lectus aliquet, finibus lacus ac, ultricies magna. Ut vestibulum, risus at interdum varius, elit nulla sagittis nulla, in rutrum tellus velit quis tortor. Nam aliquam enim mauris, eu bibendum lacus congue vitae. Nunc eu elit velit.\r\n\r\nNunc enim arcu, dictum ut tristique et, ullamcorper id risus. Mauris bibendum leo lectus, id volutpat lacus luctus vitae. Phasellus vestibulum cursus urna congue convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tincidunt, urna eget gravida mattis, nulla dolor tempus tellus, sit amet tincidunt purus dui non tellus. Pellentesque consectetur malesuada gravida. Vestibulum nisi augue, aliquam dignissim diam ut, blandit elementum dui. Vestibulum purus sem, vehicula in accumsan non, pellentesque sed ligula. In egestas eros eu finibus varius. Aenean gravida dolor sit amet libero vulputate, semper elementum purus condimentum. Fusce pellentesque auctor velit non scelerisque. In elementum posuere orci. Vivamus vitae erat vel mi elementum aliquam et at mauris. ', 'assets/img/blog/3.jpg', '2021-12-05 09:51:05', 2, 1),
(4, 'Vasárnapi sportműsor: pályán a Real', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis erat sit amet elit volutpat cursus. Vestibulum rhoncus dolor mauris, sit amet porta felis pellentesque ut. Aenean quis vehicula risus. Aliquam tortor lectus, pretium sit amet neque non, luctus iaculis ante. Aliquam lacinia ut quam nec porta. Nullam tellus augue, scelerisque et varius a, iaculis at lacus. Mauris sit amet congue quam. Integer molestie lectus interdum, lacinia leo ac, venenatis velit. Sed accumsan lacus eu ipsum dictum, ut congue quam condimentum. ', ' Donec maximus sodales neque nec dictum. Donec feugiat mollis felis eu accumsan. Suspendisse tincidunt justo id felis faucibus, quis fermentum nibh elementum. Phasellus pellentesque egestas risus vitae fermentum. Sed sed urna at ante egestas semper. Nulla interdum ut risus vitae porta. Aliquam consectetur arcu nisl, et pellentesque turpis vulputate in. Sed porta nulla enim, at maximus nunc laoreet ut. Cras molestie at sapien nec lobortis. Integer dictum dolor gravida, vehicula erat ac, vulputate erat. Mauris ligula justo, aliquet eget vestibulum non, tincidunt sit amet ante. Vestibulum sodales rhoncus ex, at efficitur leo ultrices ut. Curabitur magna mauris, pharetra ut eros vel, ullamcorper blandit justo.\r\n\r\nNullam lacus nisi, lacinia id turpis sit amet, faucibus aliquet lorem. Duis dignissim, enim sed varius aliquam, ligula enim consequat risus, eu bibendum nulla tellus vel metus. Proin iaculis nibh vitae libero sollicitudin, ut congue enim imperdiet. Pellentesque sit amet nunc urna. Nullam ut aliquet sem. Etiam hendrerit purus eget aliquet suscipit. Proin ut elit quis dolor gravida egestas. Nam at massa nec lacus venenatis aliquet.\r\n\r\nPraesent ornare auctor finibus. Nam aliquet tortor eu neque consectetur, eget laoreet odio egestas. Curabitur nisl diam, dignissim sit amet augue sit amet, consectetur malesuada eros. Aliquam hendrerit rutrum tempor. Vestibulum venenatis at magna et euismod. Sed nec maximus justo. Phasellus hendrerit arcu neque, ut mattis dui facilisis sit amet. Duis at blandit mi. Nam vel pellentesque mauris. Maecenas semper, augue vel vulputate cursus, purus mauris euismod ligula, sit amet molestie enim dui vitae erat. Vivamus mauris eros, imperdiet vitae vulputate ac, molestie eget leo. Maecenas id interdum velit. Aliquam nulla urna, viverra in lorem non, gravida tincidunt nulla. ', 'assets/img/blog/4.jpg', '2021-11-17 13:31:16', 1, 1),
(5, 'A sérüléssel küzdő Neymar lemaradhat a Real Madrid elleni BL-rangadóról', ' Integer sagittis odio sed est lobortis, facilisis vulputate ex consequat. Mauris sagittis tincidunt nisi, in porttitor risus auctor vitae. In sit amet eros ac mi efficitur rhoncus vitae ut mauris. Vivamus vestibulum feugiat laoreet. Pellentesque sit amet massa orci. ', ' Integer sagittis odio sed est lobortis, facilisis vulputate ex consequat. Mauris sagittis tincidunt nisi, in porttitor risus auctor vitae. In sit amet eros ac mi efficitur rhoncus vitae ut mauris. Vivamus vestibulum feugiat laoreet. Pellentesque sit amet massa orci. \r\n\r\nPraesent ex nisl, sagittis vel dui ac, viverra convallis turpis. Donec blandit, dolor et porta condimentum, ex tortor lacinia ligula, sed suscipit enim leo id magna. Aliquam eu libero mi. Curabitur at augue sagittis, porta ex eget, dapibus arcu. Integer condimentum suscipit elit, quis fermentum purus posuere vitae. Vestibulum egestas efficitur sodales. Quisque a lacus semper, semper sem non, ornare felis. Suspendisse vestibulum lacus ut ligula vehicula posuere.\r\n\r\nNunc lectus dolor, semper eget neque at, dapibus scelerisque leo. Sed tincidunt scelerisque nibh, sed consectetur odio faucibus quis. Duis eget odio id nibh consequat semper at a neque. Nam ac magna ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies vel augue porta viverra. Cras volutpat lacinia consectetur. Phasellus vel congue mauris, in feugiat libero. Sed vulputate dolor vel est dictum, eget viverra orci aliquet. Vivamus vehicula ut nulla a fermentum. Nulla risus orci, lobortis at lectus in, viverra vestibulum lorem. Vivamus justo arcu, porttitor non erat quis, vulputate blandit lorem. Sed maximus eros a gravida vulputate. Sed ut nulla placerat, tincidunt odio ut, bibendum lectus. ', 'assets/img/blog/5.jpg', '2021-12-23 08:59:31', 2, 1),
(6, 'A magyar tehetség nyerte az U14-es sakkozók világbajnokságát', 'Etiam justo felis, hendrerit in hendrerit in, sagittis a dui. Vestibulum vel malesuada tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla tristique nibh dui, tincidunt convallis ante feugiat ut. Aliquam erat volutpat. Mauris gravida interdum maximus. Pellentesque viverra interdum justo, sed laoreet turpis ornare id. ', ' Etiam justo felis, hendrerit in hendrerit in, sagittis a dui. Vestibulum vel malesuada tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla tristique nibh dui, tincidunt convallis ante feugiat ut. Aliquam erat volutpat. Mauris gravida interdum maximus. Pellentesque viverra interdum justo, sed laoreet turpis ornare id.\r\n\r\nInteger sagittis odio sed est lobortis, facilisis vulputate ex consequat. Mauris sagittis tincidunt nisi, in porttitor risus auctor vitae. In sit amet eros ac mi efficitur rhoncus vitae ut mauris. Vivamus vestibulum feugiat laoreet. Pellentesque sit amet massa orci. Praesent ex nisl, sagittis vel dui ac, viverra convallis turpis. Donec blandit, dolor et porta condimentum, ex tortor lacinia ligula, sed suscipit enim leo id magna. Aliquam eu libero mi. Curabitur at augue sagittis, porta ex eget, dapibus arcu. Integer condimentum suscipit elit, quis fermentum purus posuere vitae. Vestibulum egestas efficitur sodales. Quisque a lacus semper, semper sem non, ornare felis. Suspendisse vestibulum lacus ut ligula vehicula posuere. ', 'assets/img/blog/6.jpg', '2021-12-24 08:59:31', 2, 4),
(7, 'Hivatalos: Ferran Torres a Barcelona játékosa lett! ', ' Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas dui nunc, ullamcorper et finibus ac, fringilla eget turpis. Nam sagittis ac neque sed convallis. Proin id magna lacus. Suspendisse efficitur suscipit tellus, vitae bibendum ipsum faucibus vitae. Vivamus feugiat commodo varius. Phasellus eu enim non lorem faucibus blandit quis et lorem. Ut eget facilisis mi. Quisque posuere posuere nulla sit amet vulputate. Nullam vel placerat odio. Duis arcu ipsum, tristique ac lorem et, laoreet tempor elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec elit porttitor, pellentesque nunc a, rhoncus quam.', ' Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas dui nunc, ullamcorper et finibus ac, fringilla eget turpis. Nam sagittis ac neque sed convallis. Proin id magna lacus. Suspendisse efficitur suscipit tellus, vitae bibendum ipsum faucibus vitae. Vivamus feugiat commodo varius. Phasellus eu enim non lorem faucibus blandit quis et lorem. Ut eget facilisis mi. Quisque posuere posuere nulla sit amet vulputate. Nullam vel placerat odio. Duis arcu ipsum, tristique ac lorem et, laoreet tempor elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec elit porttitor, pellentesque nunc a, rhoncus quam.\r\n\r\nProin in molestie ligula, sed blandit mi. Suspendisse tempor est pellentesque gravida tincidunt. Donec malesuada vel ex sed tempus. Curabitur porta ligula at commodo cursus. In et lacus felis. Sed volutpat quam ut pulvinar ornare. Curabitur faucibus enim mi, sit amet pulvinar magna venenatis quis. Praesent eu sapien porta metus rhoncus aliquam. Duis ac posuere est. Proin vitae nisl ac libero tincidunt semper eget nec quam. Vivamus mollis nisl tellus, in pretium metus placerat at. Phasellus tempus dolor et fermentum lacinia. Nullam fringilla ipsum eget metus viverra consectetur. ', 'assets/img/blog/7.jpg', '2021-12-28 16:33:55', 5, 1),
(8, 'Ja Morant dobásával nyert a Grizzlies Phoenixben', 'Aliquam erat volutpat. Vestibulum pellentesque suscipit lorem, non varius nunc pharetra in. Suspendisse scelerisque, tellus ut volutpat pharetra, felis mauris mattis arcu, vitae hendrerit lectus lectus non nisi. Curabitur aliquam ultrices nisl, nec convallis arcu porttitor ac. Duis tempor quam turpis, sed rutrum lectus pellentesque id.', 'Aliquam erat volutpat. Vestibulum pellentesque suscipit lorem, non varius nunc pharetra in. Suspendisse scelerisque, tellus ut volutpat pharetra, felis mauris mattis arcu, vitae hendrerit lectus lectus non nisi. Curabitur aliquam ultrices nisl, nec convallis arcu porttitor ac. Duis tempor quam turpis, sed rutrum lectus pellentesque id. Nullam dictum eget ligula convallis varius. Nulla at tempus urna. In tincidunt sapien augue. Nunc sit amet blandit nibh. Donec eget arcu dapibus, commodo ex sollicitudin, dignissim ligula. Aenean in tortor non quam gravida sodales. Proin semper lacinia tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque dapibus convallis ipsum nec cursus. Donec molestie aliquet dignissim. ', 'assets/img/blog/8.jpg', '2021-12-28 16:50:55', 4, 2),
(9, 'Kajak-kenu: „Jövőre már a kutyát sem érdekli, hogy olimpiai bajnok lettem”', 'Nullam vel placerat odio. Duis arcu ipsum, tristique ac lorem et, laoreet tempor elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec elit porttitor, pellentesque nunc a, rhoncus quam. ', 'Proin in molestie ligula, sed blandit mi. Suspendisse tempor est pellentesque gravida tincidunt. Donec malesuada vel ex sed tempus. Curabitur porta ligula at commodo cursus. In et lacus felis. Sed volutpat quam ut pulvinar ornare. Curabitur faucibus enim mi, sit amet pulvinar magna venenatis quis. Praesent eu sapien porta metus rhoncus aliquam. Duis ac posuere est. Proin vitae nisl ac libero tincidunt semper eget nec quam. Vivamus mollis nisl tellus, in pretium metus placerat at. Phasellus tempus dolor et fermentum lacinia. Nullam fringilla ipsum eget metus viverra consectetur. ', 'assets/img/blog/9.jpg', '2021-12-28 16:45:03', 3, 4),
(10, 'Rebrov: Nem bánom, hogy eljöttem a Ferencvárostól', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sagittis, purus sit amet blandit faucibus, nulla eros faucibus dui, quis accumsan dui neque sit amet sapien. Quisque sed leo odio. Praesent bibendum metus a orci rutrum laoreet. Maecenas sed nisl in nibh interdum semper. Sed ut enim dignissim, ultricies massa a, lacinia nisl. Fusce non ex semper, ullamcorper magna sit amet, porta dui. Mauris in elit mollis, blandit urna sodales, tempus diam. ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sagittis, purus sit amet blandit faucibus, nulla eros faucibus dui, quis accumsan dui neque sit amet sapien. Quisque sed leo odio. Praesent bibendum metus a orci rutrum laoreet. Maecenas sed nisl in nibh interdum semper. Sed ut enim dignissim, ultricies massa a, lacinia nisl. Fusce non ex semper, ullamcorper magna sit amet, porta dui. Mauris in elit mollis, blandit urna sodales, tempus diam.\r\n\r\nDuis efficitur ornare tortor, vel euismod purus elementum quis. Nam commodo, tortor at ultricies gravida, leo dui malesuada ligula, eu rhoncus mauris ipsum ut dolor. In ultrices, magna a auctor ullamcorper, enim nulla molestie lacus, ac gravida mauris eros sed eros. Cras auctor lectus dolor, id consequat ex pulvinar vitae. Vestibulum id finibus mauris. Nunc id enim eget libero ultricies tincidunt ac non magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed cursus ut risus vel fringilla. Morbi sed mattis justo. Phasellus sit amet fermentum purus, at sagittis erat.', 'assets/img/blog/10.jpg', '2021-12-28 16:56:03', 1, 1),
(11, 'Pozitív lett Máthé Dominik koronavírustesztje', 'Fusce lobortis placerat sollicitudin. Vestibulum eu lobortis quam. Nunc tempor facilisis ipsum in mollis. Morbi aliquet molestie tellus, laoreet pharetra risus ornare eget. Praesent condimentum ut arcu in finibus. Integer fermentum lorem velit, eu semper tellus euismod lacinia. Maecenas quis magna nunc. Mauris vel luctus sem. Cras vehicula dui in dolor aliquam bibendum. ', ' Fusce lobortis placerat sollicitudin. Vestibulum eu lobortis quam. Nunc tempor facilisis ipsum in mollis. Morbi aliquet molestie tellus, laoreet pharetra risus ornare eget. Praesent condimentum ut arcu in finibus. Integer fermentum lorem velit, eu semper tellus euismod lacinia. Maecenas quis magna nunc. Mauris vel luctus sem. Cras vehicula dui in dolor aliquam bibendum.\r\n\r\nCras non sagittis orci. Nunc porttitor consequat aliquam. In sed cursus felis. Integer ut tempor lacus, ut aliquet nibh. Etiam volutpat felis libero, at volutpat nulla dignissim a. Etiam vulputate venenatis justo, condimentum convallis lacus venenatis et. Quisque viverra neque sagittis arcu cursus, at hendrerit tortor dapibus. Sed rutrum commodo ipsum, a volutpat libero. Aenean euismod dui urna, eget cursus dolor mollis sit amet. Maecenas tincidunt justo a turpis interdum viverra. Nulla luctus erat erat, quis fermentum purus mollis vel. In neque nulla, mattis non ultrices quis, accumsan tempus velit. Sed tincidunt elit felis, pretium semper ipsum pharetra non. Morbi a augue massa. ', 'assets/img/blog/11.jpg', '2021-12-28 16:43:03', 5, 3),
(12, 'Szilágyi Liliána reagált apja és húga leveleire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra turpis eleifend, gravida felis a, consequat velit. Nam mattis volutpat quam efficitur feugiat. Curabitur ultricies quam eget finibus pulvinar. Praesent lobortis ex augue, vitae lacinia risus dapibus a. Praesent a urna auctor, rhoncus eros in, gravida quam. Mauris blandit odio a facilisis auctor. Duis id malesuada est. Integer aliquam urna et lorem imperdiet dapibus. ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra turpis eleifend, gravida felis a, consequat velit. Nam mattis volutpat quam efficitur feugiat. Curabitur ultricies quam eget finibus pulvinar. Praesent lobortis ex augue, vitae lacinia risus dapibus a. Praesent a urna auctor, rhoncus eros in, gravida quam. Mauris blandit odio a facilisis auctor. Duis id malesuada est. Integer aliquam urna et lorem imperdiet dapibus.\r\n\r\nVivamus a ipsum lacinia ante euismod dictum. Sed ullamcorper venenatis iaculis. Quisque sit amet lorem ligula. Pellentesque placerat tellus ipsum, in commodo dolor rhoncus sit amet. Cras sollicitudin tellus ut auctor consequat. Vivamus malesuada pellentesque commodo. Fusce vehicula venenatis purus quis rutrum. Integer sollicitudin tellus sem, in porta erat sollicitudin eget. Mauris sollicitudin risus in mollis volutpat. Fusce vel ligula mi. ', 'assets/img/blog/12.jpg', '2021-12-31 08:55:34', 3, 7),
(13, 'Vasárnapi sportműsor: Chelsea–Liverpool rangadó a PL-ben', 'Nam ut molestie dui. Aliquam tempor lectus eget tristique facilisis. Aliquam sodales arcu id nunc pellentesque dignissim. Nullam quis consequat ipsum. Nulla pretium porta vestibulum. Vivamus vulputate sed purus eu auctor. Etiam condimentum faucibus sapien, vel porta urna porttitor et.', ' Nam ut molestie dui. Aliquam tempor lectus eget tristique facilisis. Aliquam sodales arcu id nunc pellentesque dignissim. Nullam quis consequat ipsum. Nulla pretium porta vestibulum. Vivamus vulputate sed purus eu auctor. Etiam condimentum faucibus sapien, vel porta urna porttitor et.\r\n\r\nProin finibus tincidunt nunc, a auctor libero pharetra posuere. Suspendisse vel massa id est tincidunt elementum. Duis sed porta nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a tempus mauris, nec molestie velit. Donec sit amet dui non mi fringilla porta. Sed ornare consequat finibus. Praesent imperdiet, massa id mollis ultricies, diam urna lacinia magna, quis condimentum mauris velit ut metus. Pellentesque ac condimentum ligula, sed euismod erat. Sed eu euismod lorem. Quisque molestie a tortor eget pellentesque. Vestibulum arcu purus, consequat quis orci vel, porttitor dictum arcu. ', 'assets/img/blog/13.jpg', '2022-01-01 05:00:00', 2, 1),
(14, 'Az FTC felülmúlta a Kisvárdát', 'Proin finibus tincidunt nunc, a auctor libero pharetra posuere. Suspendisse vel massa id est tincidunt elementum. Duis sed porta nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a tempus mauris, nec molestie velit. Donec sit amet dui non mi fringilla porta. Sed ornare consequat finibus.', ' Proin finibus tincidunt nunc, a auctor libero pharetra posuere. Suspendisse vel massa id est tincidunt elementum. Duis sed porta nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a tempus mauris, nec molestie velit. Donec sit amet dui non mi fringilla porta. Sed ornare consequat finibus. Praesent imperdiet, massa id mollis ultricies, diam urna lacinia magna, quis condimentum mauris velit ut metus. Pellentesque ac condimentum ligula, sed euismod erat. Sed eu euismod lorem. Quisque molestie a tortor eget pellentesque. Vestibulum arcu purus, consequat quis orci vel, porttitor dictum arcu.\r\n\r\nMaecenas nec egestas elit. Morbi pharetra leo sed ligula lacinia, eget finibus tellus ultrices. Nunc congue purus in accumsan ullamcorper. Vestibulum lacinia, massa sit amet gravida dignissim, sapien velit porta est, a pharetra metus sem quis ex. Vestibulum rhoncus arcu non mi semper porttitor. Maecenas ut interdum nisi. Suspendisse ornare ut mi a bibendum. Pellentesque molestie venenatis lorem id congue. Nam quis neque id nulla accumsan euismod. ', 'assets/img/blog/14.jpg', '2022-01-02 08:55:34', 1, 3),
(15, 'Xavi: Nevetséges, hogy ezt a meccset megrendezik', 'Nam ut molestie dui. Aliquam tempor lectus eget tristique facilisis. Aliquam sodales arcu id nunc pellentesque dignissim. Nullam quis consequat ipsum. Nulla pretium porta vestibulum. Vivamus vulputate sed purus eu auctor. Etiam condimentum faucibus sapien, vel porta urna porttitor et. ', ' Nam ut molestie dui. Aliquam tempor lectus eget tristique facilisis. Aliquam sodales arcu id nunc pellentesque dignissim. Nullam quis consequat ipsum. Nulla pretium porta vestibulum. Vivamus vulputate sed purus eu auctor. Etiam condimentum faucibus sapien, vel porta urna porttitor et.\r\n\r\nProin finibus tincidunt nunc, a auctor libero pharetra posuere. Suspendisse vel massa id est tincidunt elementum. Duis sed porta nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a tempus mauris, nec molestie velit. Donec sit amet dui non mi fringilla porta. Sed ornare consequat finibus. Praesent imperdiet, massa id mollis ultricies, diam urna lacinia magna, quis condimentum mauris velit ut metus. Pellentesque ac condimentum ligula, sed euismod erat. Sed eu euismod lorem. Quisque molestie a tortor eget pellentesque. Vestibulum arcu purus, consequat quis orci vel, porttitor dictum arcu. ', 'assets/img/blog/15.jpg', '2022-01-01 16:58:17', 5, 1),
(16, 'Joó Abigél három év után győzelemmel tért vissza, gyűjtögették az érmeket az olimpikonok', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra turpis eleifend, gravida felis a, consequat velit. Nam mattis volutpat quam efficitur feugiat. Curabitur ultricies quam eget finibus pulvinar. Praesent lobortis ex augue, vitae lacinia risus dapibus a. Praesent a urna auctor, rhoncus eros in, gravida quam. Mauris blandit odio a facilisis auctor. Duis id malesuada est. Integer aliquam urna et lorem imperdiet dapibus', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra turpis eleifend, gravida felis a, consequat velit. Nam mattis volutpat quam efficitur feugiat. Curabitur ultricies quam eget finibus pulvinar. Praesent lobortis ex augue, vitae lacinia risus dapibus a. Praesent a urna auctor, rhoncus eros in, gravida quam. Mauris blandit odio a facilisis auctor. Duis id malesuada est. Integer aliquam urna et lorem imperdiet dapibus.\r\n\r\nVivamus a ipsum lacinia ante euismod dictum. Sed ullamcorper venenatis iaculis. Quisque sit amet lorem ligula. Pellentesque placerat tellus ipsum, in commodo dolor rhoncus sit amet. Cras sollicitudin tellus ut auctor consequat. Vivamus malesuada pellentesque commodo. Fusce vehicula venenatis purus quis rutrum. Integer sollicitudin tellus sem, in porta erat sollicitudin eget. Mauris sollicitudin risus in mollis volutpat. Fusce vel ligula mi. ', 'assets/img/blog/16.jpg', '2022-01-02 20:12:17', 2, 6),
(17, 'Az úszó, aki háborúba indul, hogy halhatatlanná váljon', 'Nem mindennapi célokat tűzött ki maga elé Adam Peaty, a 100 méteres mellúszás kétszeres olimpiai bajnoka.', 'Proin finibus tincidunt nunc, a auctor libero pharetra posuere. Suspendisse vel massa id est tincidunt elementum. Duis sed porta nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed a tempus mauris, nec molestie velit. Donec sit amet dui non mi fringilla porta. Sed ornare consequat finibus. Praesent imperdiet, massa id mollis ultricies, diam urna lacinia magna, quis condimentum mauris velit ut metus. Pellentesque ac condimentum ligula, sed euismod erat. Sed eu euismod lorem. Quisque molestie a tortor eget pellentesque. Vestibulum arcu purus, consequat quis orci vel, porttitor dictum arcu. ', 'assets/img/blog/17.jpg', '2022-01-02 12:55:34', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `bejegyzes_cimke`
--

CREATE TABLE `bejegyzes_cimke` (
  `id` int(11) NOT NULL,
  `bejegyzes_id` int(11) NOT NULL,
  `cimke_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cimke`
--

CREATE TABLE `cimke` (
  `id` int(11) NOT NULL,
  `nev` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `elonev` varchar(45) DEFAULT NULL,
  `utonev` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jelszo` text DEFAULT NULL,
  `ervenyes` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instagram`
--

INSERT INTO `instagram` (`id`, `link`, `alt`) VALUES
(1, 'assets/img/instagram/1.jpg', 'Szilágyi Áron'),
(2, 'assets/img/instagram/2.jpg', 'Ronaldinho'),
(3, 'assets/img/instagram/3.jpg', 'Cseh László'),
(4, 'assets/img/instagram/4.jpg', 'Judo'),
(5, 'assets/img/instagram/5.jpg', 'Kézilabda'),
(6, 'assets/img/instagram/6.jpg', 'Loki meccs');

-- --------------------------------------------------------

--
-- Table structure for table `szerzo`
--

CREATE TABLE `szerzo` (
  `id` int(11) NOT NULL,
  `vezeteknev` varchar(145) DEFAULT NULL,
  `utonev` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `szerzo`
--

INSERT INTO `szerzo` (`id`, `vezeteknev`, `utonev`, `email`) VALUES
(1, 'Puskás', 'Tivadar', 'tivadar.puskas@gmail.com'),
(2, 'Kesztyűs', 'Estella', 'gloves.stella@yahoo.com'),
(3, 'Pálinkás', 'József', 'jozsef.palinkas@hotmail.com'),
(4, 'Drill', 'Abigél', 'drill.abb@gmail.com'),
(5, 'Szocskár', 'Éva', 'eva.szocskar@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `temakor`
--

CREATE TABLE `temakor` (
  `id` int(11) NOT NULL,
  `megnevezes` varchar(255) DEFAULT NULL,
  `leiras` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temakor`
--

INSERT INTO `temakor` (`id`, `megnevezes`, `leiras`) VALUES
(1, 'Labdarugás', 'A foci legizgalmasabb pillanatai!'),
(2, 'Kosárlabda', 'Kosrárlabda minden mennyiségben!'),
(3, 'Kézilabda', 'A 2021-es női kézilabda-világbajnokságot december 1. és 19. között Spanyolországban rendezik. Ez a 25. női kézilabda-vb.'),
(4, 'Olimpia', 'Angolról fordítva-A Nyári Olimpiai Játékok, más néven az Olimpia Játékai, nagy nemzetközi, több sportágban zajló esemény, amelyet általában négyévente rendeznek meg.'),
(5, 'Paralimpia', 'A paralimpiai játékok testi és értelmi fogyatékosok, sérültek számára rendezett nemzetközi sportversenyek az olimpiai játékok mintájára.'),
(6, 'Cselgáncs', 'Cselgáncs vagy dzsúdó a 19. század végén kialakult japán küzdősport. Jellemzői a test-test elleni harc, az ellenfél földre dobása, gáncsolása, földön való leszorítása, karjának feszítése, illetve az ellenfél fojtó fogással való ártalmatlanná tétele.'),
(7, 'Úszás', 'Az úszás a folyadékban történő mozgás összefoglaló neve. Tárgyak és állatok mozgását is szokták így nevezni, ám ez a szócikk kifejezetten az emberek vízben önerőből haladó mozgásával foglalkozik. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bejegyzes`
--
ALTER TABLE `bejegyzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bejegyzes_szerzo_idx` (`szerzo_id`),
  ADD KEY `fk_bejegyzes_temakor1_idx` (`temakor_id`);

--
-- Indexes for table `bejegyzes_cimke`
--
ALTER TABLE `bejegyzes_cimke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bejegyzes_cimke_bejegyzes1_idx` (`bejegyzes_id`),
  ADD KEY `fk_bejegyzes_cimke_cimke1_idx` (`cimke_id`);

--
-- Indexes for table `cimke`
--
ALTER TABLE `cimke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `szerzo`
--
ALTER TABLE `szerzo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temakor`
--
ALTER TABLE `temakor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bejegyzes`
--
ALTER TABLE `bejegyzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bejegyzes_cimke`
--
ALTER TABLE `bejegyzes_cimke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cimke`
--
ALTER TABLE `cimke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `szerzo`
--
ALTER TABLE `szerzo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temakor`
--
ALTER TABLE `temakor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bejegyzes`
--
ALTER TABLE `bejegyzes`
  ADD CONSTRAINT `fk_bejegyzes_szerzo` FOREIGN KEY (`szerzo_id`) REFERENCES `szerzo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bejegyzes_temakor1` FOREIGN KEY (`temakor_id`) REFERENCES `temakor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bejegyzes_cimke`
--
ALTER TABLE `bejegyzes_cimke`
  ADD CONSTRAINT `fk_bejegyzes_cimke_bejegyzes1` FOREIGN KEY (`bejegyzes_id`) REFERENCES `bejegyzes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bejegyzes_cimke_cimke1` FOREIGN KEY (`cimke_id`) REFERENCES `cimke` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
