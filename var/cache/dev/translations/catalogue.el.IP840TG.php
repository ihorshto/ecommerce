<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This value should be false.' => 'Αυτή η τιμή πρέπει να είναι ψευδής.',
    'This value should be true.' => 'Αυτή η τιμή πρέπει να είναι αληθής.',
    'This value should be of type {{ type }}.' => 'Αυτή η τιμή πρέπει να είναι τύπου {{ type }}.',
    'This value should be blank.' => 'Αυτή η τιμή πρέπει να είναι κενή.',
    'The value you selected is not a valid choice.' => 'Η τιμή που επιλέχθηκε δεν αντιστοιχεί σε έγκυρη επιλογή.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Πρέπει να επιλέξτε τουλάχιστον {{ limit }} επιλογή.|Πρέπει να επιλέξτε τουλάχιστον {{ limit }} επιλογές.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Πρέπει να επιλέξτε το πολύ {{ limit }} επιλογή.|Πρέπει να επιλέξτε το πολύ {{ limit }} επιλογές.',
    'One or more of the given values is invalid.' => 'Μια ή περισσότερες τιμές δεν είναι έγκυρες.',
    'This field was not expected.' => 'Αυτό το πεδίο δεν ήταν αναμενόμενο.',
    'This field is missing.' => 'Λείπει αυτό το πεδίο.',
    'This value is not a valid date.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία.',
    'This value is not a valid datetime.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία και ώρα.',
    'This value is not a valid email address.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρο email.',
    'The file could not be found.' => 'Το αρχείο δε μπορεί να βρεθεί.',
    'The file is not readable.' => 'Το αρχείο δεν είναι αναγνώσιμο.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο ({{ size }} {{ suffix }}). Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ο τύπος mime του αρχείου δεν είναι έγκυρος ({{ type }}). Οι έγκυροι τύποι mime είναι {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή λιγότερο.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή λιγότερο.|Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή λιγότερο.',
    'This value should be {{ limit }} or more.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή περισσότερο.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή περισσότερο.|Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή περισσότερο.',
    'This value should not be blank.' => 'Αυτή η τιμή δεν πρέπει να είναι κενή.',
    'This value should not be null.' => 'Αυτή η τιμή δεν πρέπει να είναι μηδενική.',
    'This value should be null.' => 'Αυτή η τιμή πρέπει να είναι μηδενική.',
    'This value is not valid.' => 'Αυτή η τιμή δεν είναι έγκυρη.',
    'This value is not a valid time.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρη ώρα.',
    'This value is not a valid URL.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρο URL.',
    'The two values should be equal.' => 'Οι δύο τιμές θα πρέπει να είναι ίδιες.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο. Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Το αρχείο είναι πολύ μεγάλο.',
    'The file could not be uploaded.' => 'Το αρχείο δε μπορεί να ανέβει.',
    'This value should be a valid number.' => 'Αυτή η τιμή θα πρέπει να είναι ένας έγκυρος αριθμός.',
    'This file is not a valid image.' => 'Το αρχείο δεν αποτελεί έγκυρη εικόνα.',
    'This is not a valid IP address.' => 'Αυτή η IP διεύθυνση δεν είναι έγκυρη.',
    'This value is not a valid language.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έγκυρη γλώσσα.',
    'This value is not a valid locale.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρο κωδικό τοποθεσίας.',
    'This value is not a valid country.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έγκυρη χώρα.',
    'This value is already used.' => 'Αυτή η τιμή χρησιμοποιείται ήδη.',
    'The size of the image could not be detected.' => 'Το μέγεθος της εικόνας δεν ήταν δυνατό να ανιχνευθεί.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μεγάλο ({{ width }}px). Το μέγιστο επιτρεπτό πλάτος είναι {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μικρό ({{ width }}px). Το ελάχιστο επιτρεπτό πλάτος είναι {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μεγάλο ({{ height }}px). Το μέγιστο επιτρεπτό ύψος είναι {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μικρό ({{ height }}px). Το ελάχιστο επιτρεπτό ύψος είναι {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Αυτή η τιμή θα έπρεπε να είναι ο τρέχων κωδικός.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρα.|Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρες.',
    'The file was only partially uploaded.' => 'Το αρχείο δεν ανέβηκε ολόκληρο.',
    'No file was uploaded.' => 'Δεν ανέβηκε κανένα αρχείο.',
    'No temporary folder was configured in php.ini.' => 'Δεν έχει ρυθμιστεί προσωρινός φάκελος στο php.ini, ή ο ρυθμισμένος φάκελος δεν υπάρχει.',
    'Cannot write temporary file to disk.' => 'Αδυναμία εγγραφής προσωρινού αρχείου στο δίσκο.',
    'A PHP extension caused the upload to fail.' => 'Μια επέκταση PHP προκάλεσε αδυναμία ανεβάσματος.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείο ή περισσότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή περισσότερα.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείo ή λιγότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή λιγότερα.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχείo.|Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχεία.',
    'Invalid card number.' => 'Μη έγκυρος αριθμός κάρτας.',
    'Unsupported card type or invalid card number.' => 'Μη υποστηριζόμενος τύπος κάρτας ή μη έγκυρος αριθμός κάρτας.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Αυτός δεν είναι έγκυρος διεθνής αριθμός τραπεζικού λογαριασμού (IBAN).',
    'This value is not a valid ISBN-10.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Αυτό δεν είναι ούτε έγκυρος κωδικός ISBN-10 ούτε έγκυρος κωδικός ISBN-13.',
    'This value is not a valid ISSN.' => 'Αυτό δεν είναι έγκυρος κωδικός ISSN.',
    'This value is not a valid currency.' => 'Αυτό δεν αντιστοιχεί σε έγκυρο νόμισμα.',
    'This value should be equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη από {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη ή ίση με {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη από {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη ή ίση με {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Αυτή η τιμή δεν θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή δεν πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Η αναλογία πλάτους-ύψους της εικόνας είναι πολύ μεγάλη ({{ ratio }}). Μέγιστη επιτρεπτή αναλογία {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Η αναλογία πλάτους-ύψους της εικόνας είναι πολύ μικρή ({{ ratio }}). Ελάχιστη επιτρεπτή αναλογία {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Η εικόνα είναι τετράγωνη ({{ width }}x{{ height }}px). Δεν επιτρέπονται τετράγωνες εικόνες.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Η εικόνα έχει οριζόντιο προσανατολισμό ({{ width }}x{{ height }}px). Δεν επιτρέπονται εικόνες με οριζόντιο προσανατολισμό.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Η εικόνα έχει κάθετο προσανατολισμό ({{ width }}x{{ height }}px). Δεν επιτρέπονται εικόνες με κάθετο προσανατολισμό.',
    'An empty file is not allowed.' => 'Δεν επιτρέπεται κενό αρχείο.',
    'The host could not be resolved.' => 'Η διεύθυνση δεν μπόρεσε να επιλυθεί.',
    'This value does not match the expected {{ charset }} charset.' => 'Αυτή η τιμή δεν ταιριάζει στο αναμενόμενο {{ charset }} σύνολο χαρακτήρων.',
    'This is not a valid Business Identifier Code (BIC).' => 'Αυτός ο αριθμός δεν είναι έγκυρος Κωδικός Ταυτοποίησης Επιχείρησης (BIC).',
    'Error' => 'Σφάλμα',
    'This is not a valid UUID.' => 'Αυτός ο αριθμός δεν είναι έγκυρη UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Αυτή η τιμή θα έπρεπε να είναι πολλαπλάσιο του {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Αυτός ο κωδικός BIC δεν σχετίζεται με το IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Αυτή η τιμή θα πρέπει να είναι έγκυρο JSON.',
    'This collection should contain only unique elements.' => 'Αυτή η συλλογή θα πρέπει να περιέχει μόνο μοναδικά στοιχεία.',
    'This value should be positive.' => 'Αυτή η τιμή θα πρέπει να είναι θετική.',
    'This value should be either positive or zero.' => 'Αυτή η τιμή θα πρέπει να είναι θετική ή μηδενική.',
    'This value should be negative.' => 'Αυτή η τιμή θα πρέπει να είναι αρνητική.',
    'This value should be either negative or zero.' => 'Αυτή η τιμή θα πρέπει να είναι αρνητική ή μηδενική.',
    'This value is not a valid timezone.' => 'Αυτή η τιμή θα δεν είναι έγκυρη ζώνη ώρας.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Αυτός ο κωδικός πρόσβασης έχει διαρρεύσει σε παραβίαση δεδομένων. Παρακαλούμε να χρησιμοποιήσετε έναν άλλο κωδικό.',
    'This value should be between {{ min }} and {{ max }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεταξύ {{ min }} και {{ max }}.',
    'This value is not a valid hostname.' => 'Αυτή η τιμή δεν είναι έγκυρο όνομα υποδοχής.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Το νούμερο των στοιχείων σε αυτή τη συλλογή θα πρέπει να είναι πολλαπλάσιο του {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Αυτή η τιμή θα πρέπει να ικανοποιεί τουλάχιστον έναν από τους παρακάτω περιορισμούς: ',
    'Each element of this collection should satisfy its own set of constraints.' => 'Κάθε στοιχείο σε αυτή τη συλλογή θα πρέπει να ικανοποιεί το δικό του σύνολο περιορισμών.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Αυτή η τιμή δεν είναι έγκυρο International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'Αυτή η τιμή θα πρέπει να είναι μία έγκυρη έκφραση.',
    'This value is not a valid CSS color.' => 'Αυτή η τιμή δεν είναι έγκυρο χρώμα CSS.',
    'This value is not a valid CIDR notation.' => 'Αυτή η τιμή δεν είναι έγκυρη CIDR σημειογραφία.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Η τιμή του netmask πρέπει να είναι ανάμεσα σε {{ min }} και {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Το όνομα αρχείου είναι πολύ μεγάλο. Θα πρέπει να έχει έως {{ filename_max_length }} χαρακτήρα.|Το όνομα αρχείου είναι πολύ μεγάλο. Θα πρέπει να έχει έως {{ filename_max_length }} χαρακτήρες.',
    'The password strength is too low. Please use a stronger password.' => 'Η ισχύς του κωδικού πρόσβασης είναι πολύ χαμηλή. Χρησιμοποιήστε έναν ισχυρότερο κωδικό πρόσβασης.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Αυτή η τιμή περιέχει χαρακτήρες που δεν επιτρέπονται από το τρέχον επίπεδο περιορισμού.',
    'Using invisible characters is not allowed.' => 'Δεν επιτρέπεται η χρήση αόρατων χαρακτήρων.',
    'Mixing numbers from different scripts is not allowed.' => 'Δεν επιτρέπεται η μίξη αριθμών από διαφορετικά γραφήματα.',
    'Using hidden overlay characters is not allowed.' => 'Δεν επιτρέπεται η χρήση κρυφών χαρακτήρων επικάλυψης.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Η επέκταση του αρχείου δεν είναι έγκυρη ({{ extension }}). Οι επιτρεπτόμενες επεκτάσεις είναι {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Η κωδικοποίηση χαρακτήρων που ανιχνεύτηκε δεν είναι έγκυρη ({{ detected }}). Οι επιτρεπόμενες κωδικοποιήσεις είναι {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Αυτός ο αριθμός δεν είναι έγκυρη διεύθυνση MAC.',
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
    'This value is not a valid HTML5 color.' => 'Αυτή η τιμή δέν έναι έγκυρο χρώμα HTML5.',
    'Please enter a valid birthdate.' => 'Παρακαλόυμε ειχάγεται μία έγκυρη ημερομηνία γέννησης.',
    'The selected choice is invalid.' => 'Η επιλεγμένη επιλογή δέν είναι έγκυρη.',
    'The collection is invalid.' => 'Η συλλογή δέν είναι έγκυρη.',
    'Please select a valid color.' => 'Παρακαλούμε επιλέξτε ένα έγκυρο χρώμα.',
    'Please select a valid country.' => 'Παρακαλούμε επιλέξτε μία έγκυρη χώρα.',
    'Please select a valid currency.' => 'Παρακαλούμε επιλέξτε ένα έγυρο νόμισμα.',
    'Please choose a valid date interval.' => 'Παρακαλούμε επιλέξτε ένα έγκυρο διάστημα ημερομηνίας.',
    'Please enter a valid date and time.' => 'Παρακαλούμε εισαγάγετε μια έγκυρη ημερομηνία και ώρα.',
    'Please enter a valid date.' => 'Παρακαλούμε εισάγετε μία έγκυρη ημερομηνία.',
    'Please select a valid file.' => 'Παρακαλούμε επιλέξτε ένα έγκυρο αρχείο.',
    'The hidden field is invalid.' => 'Το κρυφό πεδίο δέν είναι έγκυρο.',
    'Please enter an integer.' => 'Παρακαλούμε εισάγετε έναν ακέραιο αριθμό.',
    'Please select a valid language.' => 'Παρακαλούμε επιλέξτε μία έγκυρη γλώσσα.',
    'Please select a valid locale.' => 'Παρακαλούμε επιλέξτε μία έγκυρη τοπικοποίηση.',
    'Please enter a valid money amount.' => 'Παρακαλούμε εισάγετε ένα έγκυρο χρηματικό ποσό.',
    'Please enter a number.' => 'Παρακαλούμε εισάγετε έναν αριθμό.',
    'The password is invalid.' => 'Ο κωδικός δέν είναι έγκυρος.',
    'Please enter a percentage value.' => 'Παρακαλούμε εισάγετε μία ποσοστιαία τιμή.',
    'The values do not match.' => 'Οι τιμές δέν ταιριάζουν.',
    'Please enter a valid time.' => 'Παρακαλούμε εισάγετε μία έγκυρη ώρα.',
    'Please select a valid timezone.' => 'Παρακαλούμε επιλέξτε μία έγυρη ζώνη ώρας.',
    'Please enter a valid URL.' => 'Παρακαλούμε εισάγετε μια έγκυρη διεύθυνση URL.',
    'Please enter a valid search term.' => 'Παρακαλούμε εισάγετε έναν έγκυρο όρο αναζήτησης.',
    'Please provide a valid phone number.' => 'Παρακαλούμε καταχωρίστε έναν έγκυρο αριθμό τηλεφώνου.',
    'The checkbox has an invalid value.' => 'Το πλαίσιο ελέγχου έχει μή έγκυρη τιμή.',
    'Please enter a valid email address.' => 'Παρακαλούμε εισάγετε μία έγκυρη ηλεκτρονική διεύθυνση.',
    'Please select a valid option.' => 'Παρακαλούμε επιλέξτε μία έγκυρη επιλογή.',
    'Please select a valid range.' => 'Παρακαλούμε επιλέξτε ένα έγυρο εύρος.',
    'Please enter a valid week.' => 'Παρακαλούμε εισάγετε μία έγκυρη εβδομάδα.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το όνομα χρήστη δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
    'Too many failed login attempts, please try again later.' => 'Πολλαπλές αποτυχημένες απόπειρες σύνδεσης, παρακαλούμε ξαναδοκιμάστε αργότερα.',
    'Invalid or expired login link.' => 'Μη έγκυρος ή ληγμένος σύνδεσμος σύνδεσης.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Πολλαπλές αποτυχημένες απόπειρες σύνδεσης, παρακαλούμε ξαναδοκιμάστε σε %minutes% λεπτό.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette valeur n\'est pas une adresse IP valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini, ou le répertoire configuré n\'existe pas.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Cette valeur n\'est pas un Numéro de Compte Bancaire International (IBAN) valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Cette valeur n\'est pas un Code Identifiant de Business (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Cette valeur n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This value is not a valid CSS color.' => 'Cette valeur n\'est pas une couleur CSS valide.',
    'This value is not a valid CIDR notation.' => 'Cette valeur n\'est pas une notation CIDR valide.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'La valeur du masque de réseau doit être comprise entre {{ min }} et {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Le nom du fichier est trop long. Il doit contenir au maximum {{ filename_max_length }} caractère.|Le nom de fichier est trop long. Il doit contenir au maximum {{ filename_max_length }} caractères.',
    'The password strength is too low. Please use a stronger password.' => 'La force du mot de passe est trop faible. Veuillez utiliser un mot de passe plus fort.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Cette valeur contient des caractères qui ne sont pas autorisés par le niveau de restriction actuel.',
    'Using invisible characters is not allowed.' => 'Utiliser des caractères invisibles n\'est pas autorisé.',
    'Mixing numbers from different scripts is not allowed.' => 'Mélanger des chiffres provenant de différents scripts n\'est pas autorisé.',
    'Using hidden overlay characters is not allowed.' => 'Utiliser des caractères de superposition cachés n\'est pas autorisé.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'L\'extension du fichier est invalide ({{ extension }}). Les extensions autorisées sont {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'L\'encodage de caractères détecté est invalide ({{ detected }}). Les encodages autorisés sont {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Cette valeur n\'est pas une adresse MAC valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
