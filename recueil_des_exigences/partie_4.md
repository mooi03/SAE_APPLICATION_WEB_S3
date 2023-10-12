Pour le développement de notre application web, nous avons étudié les contraintes du client. L'application sera développée sur le système d’exploitation Windows en utilisant le langage de programmation PHP, conformément aux exigences du client.

Pour la base de données, nous utiliserons MySQL, également conforme aux préférences du client. Il est important de dire que la modification et la consultation de la base de données ne sera possible que via l'application. En ce qui concerne les capacités de la base de données, elles serra pas excessivement grandes, car le système n'aura pas besoin de stocker un volume important de données donc MySQL est une bonne option. Pour aider à visualiser la base de données nous utiliserons PHPMyAdmin.

Le système sera hébergé sur un serveur Raspberry Pi 4, et la communication se fera via le protocole HTTP, on utilise apache via le protocole HTTPD. De plus, pour installer l'application sur le serveur Raspberry Pi 4, nous prévoyons d'utiliser une carte SD.

l’application doit être capable de communiquer avec la base c'est-à-dire faire des requêtes, et pour cela elle communiquerons via apache. Elles communiqueront donc sous la forme de requêtes SQL pour les messages qui partent de l’application et de réponse SQL pour les messages qui partent de la base de données.

La partie html de l’application doit être aux normes W3C pour qu’elle soit utilisable par des personnes en situation de handicape. l’application web doit aussi pouvoir être compatible avec windows et linux c'est-à-dire pouvoir tourner à la fois sur xampp et sur lamp. Le système n'aura pas besoin de s’intégrer à d'autres systèmes déjà existants.

Nous allons aussi utiliser du CSS pour rendre la page plus esthétique. nous ferons un CSS externe nous avons détaillé la charte graphique de la page html dans le dossier consacré à la communication.
