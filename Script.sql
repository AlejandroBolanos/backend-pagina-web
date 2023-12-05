-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para restaurant_db
CREATE DATABASE IF NOT EXISTS `restaurant_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `restaurant_db`;

-- Volcando estructura para tabla restaurant_db.tb_category_dishes
CREATE TABLE IF NOT EXISTS `tb_category_dishes` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restaurant_db.tb_category_dishes: ~4 rows (aproximadamente)
INSERT INTO `tb_category_dishes` (`category_id`, `category_name`, `category_description`) VALUES
	(1, 'Main Dishes', 'Main dishes '),
	(2, 'Appetizers', 'Dishes of Appetizers'),
	(3, 'Desserts', 'Dishes of Desserts'),
	(4, 'Beverages', 'Beverages');

-- Volcando estructura para tabla restaurant_db.tb_information_dishes
CREATE TABLE IF NOT EXISTS `tb_information_dishes` (
  `dish_id` int NOT NULL AUTO_INCREMENT,
  `dish_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dish_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category_id` int NOT NULL,
  `dish_featured` tinyint(1) NOT NULL,
  `dish_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `people_category_id` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dish_name_fr` text NOT NULL,
  `dish_description_fr` text NOT NULL,
  PRIMARY KEY (`dish_id`) USING BTREE,
  KEY `categoria_id` (`category_id`) USING BTREE,
  KEY `cantidad_personas_id` (`people_category_id`) USING BTREE,
  CONSTRAINT `tb_information_dishes_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tb_category_dishes` (`category_id`),
  CONSTRAINT `tb_information_dishes_ibfk_2` FOREIGN KEY (`people_category_id`) REFERENCES `tb_people_categories` (`people_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restaurant_db.tb_information_dishes: ~36 rows (aproximadamente)
INSERT INTO `tb_information_dishes` (`dish_id`, `dish_name`, `dish_image`, `category_id`, `dish_featured`, `dish_description`, `people_category_id`, `price`, `dish_name_fr`, `dish_description_fr`) VALUES
	(1, 'Sole Meuniere', 'sole-meuniere.webp', 1, 0, ' Sole meuniere is a classic French dish where sol filets are cooked and served in a rich, buttery sauce. It also has the benefit of being super fast and easy. You can replace the sole, which can be tough to find, with cod, whiting or any other white flaky fish. ', 3, 28.80, 'Sole Meuniere', 'La sole meunière est un plat français classique où les filets de sol sont cuits et servis dans une sauce riche et beurrée. Il a également l’avantage d’être super rapide et facile. Vous pouvez remplacer la sole, qui peut être difficile à trouver, par du cabillaud, du merlan ou tout autre poisson blanc floconneux. '),
	(2, 'Duck Orange', 'duck-a-orange.webp', 1, 0, ' Duck a l\'orange is one of those classic dishes that somehow became a cliché, and people stopped making it for fear of looking un-cool, which is too bad, since it\'s really good. This is traditionally done with a whole roasted duck, but by using duck breasts we get pretty much the same results in a lot less time.', 3, 57.40, 'Canard à l’orange', ' Le canard à l’orange est l’un de ces plats classiques qui est en quelque sorte devenu un cliché, et les gens ont arrêté de le faire de peur de ne pas avoir l’air cool, ce qui est dommage, car il est vraiment bon. Cela se fait traditionnellement avec un canard entier rôti, mais en utilisant des magrets de canard, nous obtenons à peu près les mêmes résultats en beaucoup moins de temps.'),
	(3, 'Meat Pie', 'meat-pie.webp', 1, 0, ' This meat pie is delicious! I got it from my husband\'s mother. She is French so I believe this is a French meat pie recipe. Beef, pork, and potato are all nicely spiced and baked together. It\'s yummy and pretty easy to make too! It\'s best served fresh, but you can also make it ahead and freeze or refrigerate it. Serve the pie by itself or with a beef gravy.', 3, 52.30, 'Tourtière', ' Cette tourte à la viande est délicieuse ! Je l’ai reçu de la mère de mon mari. Elle est française, donc je crois que c’est une recette de pâté à la viande française. Le bœuf, le porc et la pomme de terre sont tous bien épicés et cuits ensemble. C’est délicieux et assez facile à faire aussi ! Il est préférable de le servir frais, mais vous pouvez également le préparer à l’avance et le congeler ou le réfrigérer. Servez la tarte seule ou avec une sauce au bœuf.'),
	(4, 'Trout Meunière', 'trout-meunière.webp', 1, 1, ' Trout meunière is the lightest, freshest, most clean way to enjoy fish I know of. It\'s coated and pan-fried golden brown and topped with a lemony sauce. Classic, easy, and delicious.', 1, 47.90, 'Truite Meunière', ' La truite meunière est la façon la plus légère, la plus fraîche et la plus propre de déguster le poisson que je connaisse. Il est enrobé et poêlé, doré et nappé d’une sauce citronnée. Classique, facile et délicieux.'),
	(5, 'Beans and Greens Tartine', 'beans-and-greens-tartine.webp', 1, 0, ' Bacon-y beans and garlicky greens are combined in this delicious French open-faced sandwich called a tartine.', 3, 24.10, 'Tartine de haricots et légumes verts', ' Des haricots au bacon et des légumes verts à l’ail sont combinés dans ce délicieux sandwich français ouvert appelé tartine.'),
	(6, 'Croque Madame', 'croque-madame.webp', 1, 0, ' A classic croque madame makes the perfect French-inspired brunch or lunch dish. Once you try this, it will be hard to have "just" a ham and cheese sandwich again. Don\'t cheat and use Swiss cheese, this deserves the real thing! Using Gruyère cheese will make all the difference.', 1, 5.80, 'Croque Madame', ' Un croque-madame classique est le plat parfait pour le brunch ou le déjeuner d’inspiration française. Une fois que vous aurez essayé cela, il sera difficile d’avoir à nouveau « juste » un sandwich au jambon et au fromage. Ne trichez pas et utilisez du fromage suisse, cela mérite la vraie chose ! L’utilisation du gruyère fera toute la différence.'),
	(7, 'Chicken Cordon Bleu', 'chicken-cordon-bleu.webp', 1, 0, ' This entree is easy and delicious! It\'s one of my husband\'s favorites! Try to use the largest chicken breasts you can find so you\'ll be able to roll them easier.', 2, 13.90, 'Poulet Cordon Bleu', ' Cette entrée est facile et délicieuse ! C’est l’un des préférés de mon mari ! Essayez d’utiliser les plus grosses poitrines de poulet que vous pouvez trouver afin de pouvoir les rouler plus facilement.'),
	(8, 'Lobster Thermidor', 'lobster-thermidor.webp', 1, 0, ' This stunning lobster Thermidor is surprisingly simple to make. Lobster shells are stuffed with cooked lobster in a creamy white wine sauce, then topped with Parmesan cheese and broiled until golden.', 3, 49.70, 'Homard Thermidor', ' Ce superbe homard Thermidor est étonnamment simple à préparer. Les carapaces de homard sont farcies de homard cuit dans une sauce crémeuse au vin blanc, puis garnies de parmesan et grillées jusqu’à ce qu’elles soient dorées.'),
	(9, 'Quiche Lorraine', 'quiche-lorraine.webp', 1, 0, ' Quiche Lorraine is a French classic. Bacon, Swiss cheese, and onions mingle in perfect harmony amidst eggs and cream. Perfect for breakfast, brunch, lunch, dinner, or just an indulgent snack!', 3, 63.90, 'Quiche Lorraine', ' La quiche lorraine est un classique français. Le bacon, le fromage suisse et les oignons se mêlent en parfaite harmonie au milieu des œufs et de la crème. Parfait pour le petit-déjeuner, le brunch, le déjeuner, le dîner ou tout simplement une collation gourmande !'),
	(10, 'Omelet in a Bag', 'omelet-in-a-bag.webp', 1, 0, ' This easy omelet-in-a-bag recipe is great for when there are picky eaters in the crowd who want different egg additions. You can make as many as needed or just one if you like. Got this from an internet friend. Good served with fruit and coffee cake.', 3, 54.80, 'Omelette dans un sac', ' Cette recette facile d’omelette dans un sac est idéale lorsqu’il y a des mangeurs difficiles dans la foule qui veulent différents ajouts d’œufs. Vous pouvez en faire autant que nécessaire ou un seul si vous le souhaitez. Je l’ai reçu d’un ami Internet. Bon servi avec un gâteau aux fruits et au café.'),
	(11, 'Real Poutine', 'real-poutine.webp', 2, 0, ' This poutine is an indulgence of fries, gravy, and cheese. A Canadian specialty!', 1, 28.30, 'Vraie poutine', ' Cette poutine est un plaisir de frites, de sauce et de fromage. Une spécialité canadienne !'),
	(12, 'Garlic and Herb Cream Cheese', 'garlic-and-herb-cream-cheese.webp', 2, 0, ' This garlic and herb cheese spread is great on crackers, sandwiches (when you\'re bored with mayo and mustard), or tucked into beef Wellington! It\'s so much cheaper to make it than buy it.', 3, 22.60, 'Fromage à la crème à l’ail et aux herbes', ' Cette tartinade de fromage à l’ail et aux fines herbes est excellente sur des craquelins, des sandwichs (lorsque vous vous ennuyez avec de la mayonnaise et de la moutarde) ou dans du bœuf Wellington ! C’est tellement moins cher de le fabriquer que de l’acheter.'),
	(13, 'Baked Brie in Puff Pastry', 'baked-brie-in-puff-pastry.webp', 2, 0, ' This baked Brie in puff pastry won\'t last long on your appetizer table. Serve with your favorite crackers on the side.', 1, 46.60, 'Brie cuit au four en pâte feuilletée', ' Ce brie cuit au four en pâte feuilletée ne se conservera pas longtemps sur votre table d’apéritif. Servez avec vos craquelins préférés en accompagnement.'),
	(14, 'Crêpes', 'crêpes.webp', 2, 0, ' This recipe for French crêpes is extremely versatile. These delicate pancakes can be filled with virtually anything — fruits, pudding, and mousse for desserts, or vegetables, cheeses, and meats for dinner. Extra crêpes can be frozen for later use.', 3, 9.90, 'Crêpes', ' Cette recette de crêpes françaises est extrêmement polyvalente. Ces crêpes délicates peuvent être remplies de pratiquement n’importe quoi - fruits, pudding et mousse pour les desserts, ou légumes, fromages et viandes pour le dîner. Les crêpes supplémentaires peuvent être congelées pour une utilisation ultérieure.'),
	(15, 'Sautéed Mushrooms (Quick and Simple)', 'sautéed-mushrooms-(quick-and-simple).webp', 2, 0, ' This simple mushroom recipe is delicious as a side, appetizer, part of a salad, or even just a snack. How French of you!', 1, 46.60, 'Champignons sautés (rapides et simples)', ' Cette recette simple de champignons est délicieuse en accompagnement, en apéritif, dans le cadre d’une salade ou même simplement comme collation. Comme vous êtes français !'),
	(16, 'Liver Pâté', 'liver-pâté.webp', 2, 0, ' This chicken liver pâté recipe makes a great appetizer for any holiday, party, or get-together. Serve with thinly sliced brown bread, rye crisps, crackers, or chips.', 3, 13.60, 'Pâté de foie', ' Cette recette de pâté de foie de poulet constitue un excellent apéritif pour les vacances, les fêtes ou les réunions. Servir avec du pain brun tranché finement, des chips de seigle, des craquelins ou des croustilles.'),
	(17, 'Duck Rillettes', 'duck-rillettes.webp', 2, 0, ' Making duck rillettes is one of the most amazing culinary magic tricks of all time. Even though most of the spread is made up of fairly lean duck meat, by emulsifying it in a little butter, duck fat, and duck gelatin, you\'ll swear the final product has the fat content of the finest foie gras torchon. By the way, I miss foie gras torchon.', 1, 6.00, 'Rillettes de canard', ' Faire des rillettes de canard est l’un des tours de magie culinaire les plus étonnants de tous les temps. Même si la majeure partie de la pâte à tartiner est composée de viande de canard assez maigre, en l’émulsionnant dans un peu de beurre, de graisse de canard et de gélatine de canard, vous jurerez que le produit final a la teneur en matières grasses du meilleur foie gras torchon. D’ailleurs, le foie gras au torchon me manque.'),
	(18, 'Puff Pastry Shells', 'puff-pastry-shells.webp', 2, 0, ' These are fairly simple to make, and once baked the real fun begins, as they can hold so many amazing fillings, both sweet and savory. The key is making sure your puff pastry dough is very firm, and very cold, preferably still partially frozen, before you start cutting it. You want nice clean cuts, because if you mash the layers of pastry together, your shells will not rise as high, and they can also bake into some strange shapes.', 1, 35.50, 'Coquilles de pâte feuilletée', ' Ceux-ci sont assez simples à préparer, et une fois cuits, le vrai plaisir commence, car ils peuvent contenir de nombreuses garnitures étonnantes, à la fois sucrées et salées. La clé est de s’assurer que votre pâte feuilletée est très ferme et très froide, de préférence encore partiellement congelée, avant de commencer à la couper. Vous voulez de belles coupes nettes, car si vous écrasez les couches de pâte ensemble, vos coquilles ne monteront pas aussi haut et elles peuvent également prendre des formes étranges.'),
	(19, 'Deep Fried Brie', 'deep-fried-brie.webp', 2, 0, ' Warm melted brie oozes out of a crispy breadcrumb coating when you bite into these pieces of heaven. Serve with cranberry sauce and a small side salad and you have the perfect dinner appetizer or snack.', 3, 65.20, 'Brie frit', ' Le brie chaud fondu suinte d’une couche de chapelure croustillante lorsque vous mordez dans ces morceaux de paradis. Servez avec de la sauce aux canneberges et une petite salade d’accompagnement et vous avez l’apéritif ou la collation parfaite pour le dîner.'),
	(20, 'Chocolate Crepes', 'chocolate-crepes.webp', 2, 0, ' Chocolate crepes can be made a few days ahead and assembled a few hours before serving. They\'re the perfect Valentine\'s Day surprise!', 3, 40.60, 'Crêpes au chocolat', ' Les crêpes au chocolat peuvent être préparées quelques jours à l’avance et assemblées quelques heures avant de servir. C’est la surprise parfaite pour la Saint-Valentin !'),
	(21, 'French Apple Cake', 'french-apple-cake.webp', 3, 0, ' This French apple cake is incredibly delicious. France is famous for its fabulously fancy pastries and baked goods, so you might get some skeptic looks when you tell them that this is your favorite apple cake – but trust me – this simple, rustic, easy to make cake is absolutely amazing.', 1, 38.40, 'Gâteau aux pommes à la française', ' Ce gâteau aux pommes français est incroyablement délicieux. La France est célèbre pour ses pâtisseries et ses produits de boulangerie fabuleusement sophistiqués, vous pourriez donc avoir des regards sceptiques lorsque vous leur direz que c’est votre gâteau aux pommes préféré - mais croyez-moi - ce gâteau simple, rustique et facile à faire est absolument incroyable.'),
	(22, 'Creme Patissiere', 'creme-patissiere.webp', 3, 0, ' Creme patissiere, sometimes shortened to creme pat, is a rich and creamy vanilla custard filling that’s got the perfect consistency for filling eclairs, cream puffs, and fruit tarts.', 3, 61.70, 'Crème pâtissière', 'La crème pâtissière, parfois abrégée en crème pâtissière, est une garniture à la crème pâtissière à la vanille riche et crémeuse qui a la consistance parfaite pour garnir les éclairs, les choux à la crème et les tartes aux fruits.'),
	(23, 'Apple Tarte Tatin', 'apple-tarte-tatin.webp', 3, 0, ' A tarte tatin just uses just pastry dough, butter, apples, and sugar to create magic! You can use puff pastry if you prefer. No matter how yours comes out, you\'ll enjoy it!', 3, 54.40, 'Tarte Tatin aux pommes', ' Une tarte tatin n’utilise que de la pâte à pâtisserie, du beurre, des pommes et du sucre pour créer de la magie ! Vous pouvez utiliser de la pâte feuilletée si vous préférez. Peu importe comment le vôtre sort, vous l’apprécierez !'),
	(24, 'Creme Pat', 'creme-pat.webp', 3, 0, ' Creme pat is perfect for filling eclairs, cream puffs, and fruit tarts.', 1, 63.90, 'Crème Pat', 'La crème pâté est parfaite pour garnir les éclairs, les choux à la crème et les tartes aux fruits.'),
	(25, 'Choux Pastry', 'choux-pastry.webp', 3, 0, ' Choux pastry, or pâte à choux, is surprisingly easy to make with butter, hot water, flour, and eggs. The dough comes together in less than 15 minutes, then steams and puffs up in the oven, making it perfect for eclairs, profiteroles, choux pastry rings, savory gougères, and more! ', 2, 62.40, 'Pâte à choux', ' La pâte à choux, ou pâte à choux, est étonnamment facile à préparer avec du beurre, de l’eau chaude, de la farine et des œufs. La pâte se rassemble en moins de 15 minutes, puis cuit à la vapeur et gonfle au four, ce qui la rend parfaite pour les éclairs, les profiteroles, les cercles à choux, les gougères salées, etc. '),
	(26, 'Bûche de Noël', 'bûche-de-noël.webp', 3, 0, ' Bûche de Noël is the French name for a Christmas cake shaped like a log. This one is a heavenly flourless chocolate cake rolled with chocolate whipped cream and decorated with confectioners\' sugar to resemble snow on a yule log. It doesn\'t just look beautiful — it tastes wonderful, too!', 2, 49.20, 'Bûche de Noël', ' Bûche de Noël est le nom français d’un gâteau de Noël en forme de bûche. Celui-ci est un divin gâteau au chocolat sans farine roulé avec de la crème fouettée au chocolat et décoré de sucre glace pour ressembler à de la neige sur une bûche de Noël. Il n’est pas seulement beau, il a aussi un goût merveilleux !'),
	(27, 'Crème Brûlée', 'crème-brûlée.webp', 3, 0, ' Crème brûlée is a lovely dessert to serve when entertaining. It\'s delicious served with either fresh mangos sprinkled with rum or strawberries with Grand Marnier or Cointreau.', 1, 68.60, 'Crème Brûlée', ' La crème brûlée est un délicieux dessert à servir lors d’une réception. Il est délicieux servi avec des mangues fraîches saupoudrées de rhum ou des fraises avec du Grand Marnier ou du Cointreau.'),
	(28, 'Chocolate Yule Log', 'chocolate-yule-log.webp', 3, 1, ' If you haven\'t tried this Yule log recipe because you thought it required advanced baking and pastry skill, then get ready to buche up this Noel, since the techniques required are actually quite simple. This classic holiday dessert is a showstopper, but it\'s often better looking than it is tasting, which is not the case here, thanks to a simple-to-make, rich chocolate sponge cake, and mocha buttercream filling. Garnished here with meringue mushrooms and rosemary.', 3, 47.70, 'Bûche de Noël au chocolat', ' Si vous n’avez pas essayé cette recette de bûche de Noël parce que vous pensiez qu’elle nécessitait des compétences avancées en boulangerie et en pâtisserie, préparez-vous à préparer ce Noël, car les techniques requises sont en fait assez simples. Ce dessert classique des Fêtes est un spectacle, mais il est souvent plus beau que savoureux, ce qui n’est pas le cas ici, grâce à une génoise au chocolat riche et simple à préparer et à une garniture à la crème au beurre au moka. Garni ici de champignons meringués et de romarin.'),
	(29, 'Simple Crème Brûlée Dessert', 'simple-crème-brûlée-dessert.webp', 3, 0, ' This easy crème brûlée recipe is rich and creamy. It should still be jiggly in the center when you remove it from the oven. To serve, use a spoon to crack the crisp sugar topping open to reveal the creamy dessert underneath.', 3, 39.30, 'Simple Crème Brûlée Dessert', ' Cette recette facile de crème brûlée est riche et crémeuse. Il doit encore être agité au centre lorsque vous le retirez du four. Pour servir, utilisez une cuillère pour ouvrir la garniture de sucre croustillant afin de révéler le dessert crémeux en dessous.'),
	(30, 'Irish Cream Crème Brûlée', 'irish-cream-crème-brûlée.webp', 3, 0, ' This is a great twist on an excellent dessert! We first had this at the English restaurant at Epcot, and this is the recipe I came up with the recreate it.', 2, 58.90, 'Crème brûlée à la crème irlandaise', ' C’est une excellente variante d’un excellent dessert ! Nous l’avons mangé pour la première fois au restaurant anglais d’Epcot, et c’est la recette que j’ai trouvée pour la recréer.'),
	(31, 'Sazerac Cocktail', 'sazerac-cocktail.webp', 4, 1, ' There\'s a lot to love about this classic whiskey and bitters beverage. The official drink of New Orleans, the Sazerac is every bit as aromatic and flavorful as most anything else from down on the bayou.', 1, 1.80, 'Sazerac Cocktail', ' Il y a beaucoup de choses à aimer dans cette boisson classique au whisky et aux amers. La boisson officielle de la Nouvelle-Orléans, le Sazerac est tout aussi aromatique et savoureux que la plupart des autres produits du bayou.'),
	(32, 'Stout and Ale', 'stout-and-ale.webp', 4, 0, ' This "black and tan" beer cocktail recipe is a St. Patrick\'s Day staple at our house. Don\'t be fooled by the simple ingredients... The trick is getting them to layer just right. The key is to pour the stout slowly. Enjoy!', 1, 17.30, 'Stout et Ale', ' Cette recette de cocktail à la bière « black and tan » est un incontournable de la Saint-Patrick chez nous. Ne vous laissez pas berner par les ingrédients simples... L’astuce consiste à les superposer parfaitement. La clé est de verser la stout lentement. Jouir!'),
	(33, 'Mulled Cranberry Juice', 'mulled-cranberry-juice.webp', 4, 1, ' Serve this mulled cranberry juice at your next gathering—this lovely treat will put your guests in a holiday mood. If you like, you may leave out the sugar and add some orange liqueur, like Cointreau, for the grown-up party crowd.', 1, 14.70, 'Jus de canneberge chaud', 'Servez ce jus de canneberge chaud lors de votre prochain rassemblement, cette délicieuse gâterie mettra vos invités dans l’ambiance des Fêtes. Si vous le souhaitez, vous pouvez laisser de côté le sucre et ajouter de la liqueur d’orange, comme le Cointreau, pour les fêtards adultes.'),
	(34, 'Sugar Cookie Martini', 'sugar-cookie-martini.webp', 4, 0, ' This sugar cookie martini is like your favorite holiday sugar cookie in a cocktail, with just the cookie flavor you are hoping for. Not only is it festive, it\'s easy, too, with just a few ingredients.', 1, 7.20, 'Martini au biscuit au sucre', ' Ce martini au biscuit au sucre est comme votre biscuit au sucre préféré des Fêtes dans un cocktail, avec juste la saveur de biscuit que vous espérez. Non seulement c’est festif, mais c’est aussi facile, avec seulement quelques ingrédients.'),
	(35, 'Salted Caramel Apple Shots', 'salted-caramel-apple-shots.webp', 4, 0, ' Salted caramel apple shots capture the flavors of fall in a glass. They are delightfully sweet and boozy. Taking a little bite of apple at the end adds the nostalgic flavor of a carnival caramel apple. ', 1, 12.10, 'Shots de pommes au caramel salé', ' Les shots de pommes au caramel salé capturent les saveurs de l’automne dans un verre. Ils sont délicieusement sucrés et alcoolisés. Prendre une petite bouchée de pomme à la fin ajoute la saveur nostalgique d’une pomme au caramel de carnaval.'),
	(36, 'Grinch Punch', 'grinch-punch.webp', 4, 0, ' This festive green Grinch punch is a wonderful, awful idea for a holiday party! It\'s so easy to make and your guests will enjoy it so much that your heart might just grow three sizes that day.', 1, 6.20, 'Coup de poing Grinch', ' Ce punch vert festif du Grinch est une idée merveilleuse et horrible pour une fête de Noël ! C’est si facile à préparer et vos invités l’apprécieront tellement que votre cœur pourrait bien grandir de trois tailles ce jour-là.');

-- Volcando estructura para tabla restaurant_db.tb_orders
CREATE TABLE IF NOT EXISTS `tb_orders` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `id_user` int NOT NULL,
  `order_type` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_order_id_user` (`id_user`),
  KEY `order_type` (`order_type`),
  CONSTRAINT `FK__tb_users` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`),
  CONSTRAINT `FK_tb_orders_tb_order_type` FOREIGN KEY (`order_type`) REFERENCES `tb_order_type` (`order_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla restaurant_db.tb_orders: ~12 rows (aproximadamente)
INSERT INTO `tb_orders` (`id_order`, `order_date`, `id_user`, `order_type`, `total`) VALUES
	(1, '2023-12-05', 10, 2, 0),
	(2, '2023-12-05', 10, 2, 0),
	(3, '2023-12-05', 10, 2, 0),
	(4, '2023-12-05', 10, 3, 0),
	(5, '2023-12-05', 10, 3, 0),
	(6, '2023-12-05', 10, 1, 0),
	(7, '2023-12-05', 10, 1, 0),
	(8, '2023-12-05', 10, 1, 0),
	(9, '2023-12-05', 10, 2, 0),
	(10, '2023-12-05', 10, 3, 0),
	(11, '2023-12-05', 10, 1, 0),
	(12, '2023-12-05', 10, 1, 0);

-- Volcando estructura para tabla restaurant_db.tb_order_details
CREATE TABLE IF NOT EXISTS `tb_order_details` (
  `id_order_detail` int NOT NULL AUTO_INCREMENT,
  `dish_id` int NOT NULL,
  `quantity` int NOT NULL,
  `id_order` int NOT NULL,
  PRIMARY KEY (`id_order_detail`),
  KEY `id_order_dish_id_quantity` (`dish_id`),
  KEY `FK_tb_order_details_tb_orders` (`id_order`),
  CONSTRAINT `FK__tb_information_dishes` FOREIGN KEY (`dish_id`) REFERENCES `tb_information_dishes` (`dish_id`),
  CONSTRAINT `FK_tb_order_details_tb_orders` FOREIGN KEY (`id_order`) REFERENCES `tb_orders` (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla restaurant_db.tb_order_details: ~6 rows (aproximadamente)
INSERT INTO `tb_order_details` (`id_order_detail`, `dish_id`, `quantity`, `id_order`) VALUES
	(1, 23, 2, 1),
	(3, 11, 15, 8),
	(4, 11, 1, 9),
	(5, 12, 1, 10),
	(6, 11, 1, 11),
	(7, 2, 1, 12);

-- Volcando estructura para tabla restaurant_db.tb_order_type
CREATE TABLE IF NOT EXISTS `tb_order_type` (
  `order_type_id` int NOT NULL AUTO_INCREMENT,
  `order_type_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`order_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restaurant_db.tb_order_type: ~3 rows (aproximadamente)
INSERT INTO `tb_order_type` (`order_type_id`, `order_type_name`) VALUES
	(1, 'Delivery'),
	(2, 'In place'),
	(3, 'To go');

-- Volcando estructura para tabla restaurant_db.tb_people_categories
CREATE TABLE IF NOT EXISTS `tb_people_categories` (
  `people_category_id` int NOT NULL AUTO_INCREMENT,
  `people_category_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `people_category_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`people_category_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restaurant_db.tb_people_categories: ~3 rows (aproximadamente)
INSERT INTO `tb_people_categories` (`people_category_id`, `people_category_name`, `people_category_description`) VALUES
	(1, 'Individual', 'For one persons'),
	(2, 'Pair', 'For two persons'),
	(3, 'Familiar', 'For more of three people');

-- Volcando estructura para tabla restaurant_db.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `type_user` int NOT NULL,
  `fullname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla restaurant_db.tb_users: ~5 rows (aproximadamente)
INSERT INTO `tb_users` (`id_user`, `type_user`, `fullname`, `username`, `password`, `email`) VALUES
	(10, 0, 'test', 'testing', '$2y$12$OkfuBD1cgZYWAJklmDvbnOnN3LkmtgXcnwb281NEVwT4BRqdJAxFy', 'test@gmail.com'),
	(11, 0, 'test2', 'testing2', '$2y$12$nmEejggqTI3fkefKAr6aFeEXNGMmdCu5qPTyZ7VNOIMEmbBBXSzmC', 'test@gmail.com'),
	(13, 1, 'testadmin1', 'admin1', '$2y$12$HRZxfxnB3PTAa1tXBxc62OEvPFGawJxvAw9XNlEkMsGYx.u9b.If6', 'admin@gmail.com'),
	(14, 1, 'admin', 'admin', '$2y$12$71.6Ih1fELJ/ueaPEBlyT.oJ8haS81tO3MOXw6kCOkIl1lqmTOd/2', 'admin@admin.admin'),
	(15, 0, 'user', 'user', '$2y$12$rFVW6xqZFRzt6g2kRpirGehlsXu.9NehHhftOzXECz8legveTq8AG', 'user@user.user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
