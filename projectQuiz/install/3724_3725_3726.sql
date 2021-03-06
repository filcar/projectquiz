-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Σύστημα: localhost
-- Χρόνος δημιουργίας: 10 Ιαν 2015, στις 10:23 PM
-- Έκδοση Διακομιστή: 5.0.51
-- Έκδοση PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Βάση: `3724_3725_3726`
-- 
CREATE DATABASE `3724_3725_3726` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `3724_3725_3726`;

-- --------------------------------------------------------

-- 
-- Δομή Πίνακα για τον Πίνακα `questions`
-- 

CREATE TABLE `questions` (
  `ID` int(11) NOT NULL auto_increment,
  `question` varchar(255) NOT NULL default '',
  `ans1` varchar(255) NOT NULL default '',
  `ans2` varchar(255) NOT NULL default '',
  `ans3` varchar(255) NOT NULL default '',
  `ans4` varchar(255) NOT NULL default '',
  `ans5` varchar(255) NOT NULL default '',
  `corans` varchar(8) NOT NULL default '',
  `subject_ID` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

-- 
-- 'Αδειασμα δεδομένων του πίνακα `questions`
-- 

INSERT INTO `questions` VALUES (1, 'Τα κύρια στοιχεία ενός τριγώνου είναι:', 'οι πλευρές και οι διχοτόμοι', 'οι πλευρές και τα ύψη', 'οι πλευρές και οι γωνίες', 'οι γωνίες και οι διχοτόμοι', 'οι γωνίες και οι διάμεσοι', 'ans3', 2);
INSERT INTO `questions` VALUES (2, 'Σ’ ένα τρίγωνο ισχύει α=γ. Ποιο από τα παρακάτω είναι το σωστό:', 'Α ̂=Γ ̂', 'Α ̂=Β ̂', 'Β ̂=Γ ̂', 'Α ̂=Β ̂=Γ ̂', 'Α ̂=Β ̂≠Γ ̂', 'ans1', 2);
INSERT INTO `questions` VALUES (3, 'Τα κριτήρια ισότητας τριγώνων είναι τα:', 'Π-Π-Π, Π-Π-Γ, Γ-Π-Γ', 'Π-Π-Π, Γ-Π-Π, Γ-Γ-Π', 'Π-Π-Π, Π-Γ-Π, Π-Γ-Γ', 'Π-Π-Π, Γ-Π-Π, Γ-Π-Γ', 'Π-Π-Π, Π-Γ-Π, Γ-Π-Γ', 'ans5', 2);
INSERT INTO `questions` VALUES (4, 'Ποιο από τα παρακάτω είναι σωστό;', 'Αν δύο χορδές ενός κύκλου είναι ίσες, τότε και τα τόξα τους είναι ομοίως άνισα.', 'Αν δύο χορδές ενός κύκλου είναι ίσες, τότε και τα τόξα τους είναι ανομοίως άνισα.', 'Αν δύο χορδές ενός κύκλου είναι ομοίως άνισες, τότε και τα τόξα τους είναι ίσα.', 'Αν δύο χορδές ενός κύκλου είναι ανομοίως άνισες, τότε και τα τόξα τους είναι ίσα.', 'Αν δύο χορδές ενός κύκλου είναι ίσες, τότε και τα τόξα τους είναι ίσα και αντιστρόφως.', 'ans5', 2);
INSERT INTO `questions` VALUES (5, 'Ανάλογα με τις πλευρές τα τρίγωνα διακρίνονται σε:', 'οξυγώνια, αμβλυγώνια και σκαληνά', 'σκαληνά, ισόπλευρα και ισοσκελή', 'σκαληνά, ισοσκελή και οξυγώνια', 'σκαληνά, ισόπλευρα και οξυγώνια', 'σκαληνά, ισόπλευρα και αμβλυγώνια', 'ans2', 2);
INSERT INTO `questions` VALUES (6, 'Σε κάθε ισοσκελές τρίγωνο:', 'Το ύψος που φέρουμε από την κορυφή του είναι διάμεσος και μεσοκάθετος.', 'Η διάμεσος που φέρουμε από την κορυφή του είναι μεσοκάθετος και διχοτόμος.', 'Η διχοτόμος της γωνίας της κορυφής είναι διάμεσος και ύψος.', 'Η μεσοκάθετος είναι διάμεσος και διχοτόμος.', 'Η διάμεσος είναι ύψος και διχοτόμος.', 'ans3', 2);
INSERT INTO `questions` VALUES (7, 'Ποιο από τα παρακάτω είναι το σωστό:', 'Διάμεσος τριγώνου είναι η ημιευθεία που έχει αρχή μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι η ευθεία που αρχίζει από μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και διχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και τριχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της διπλανής πλευράς και διχοτομεί την πλευρά αυτή.', 'ans3', 2);
INSERT INTO `questions` VALUES (8, 'Δίνεται τρίγωνο ΑΒΓ με πλευρές α,β,γ.', 'Αν α=β=γ τότε το τρίγωνο είναι ισοσκελές.', 'Αν α=β τότε το τρίγωνο είναι ισοσκελές.', 'Αν α=β και β=γ τότε το τρίγωνο είναι ισοσκελές.', 'Αν α=β≠γ τότε το τρίγωνο είναι ισόπλευρο.', 'Αν α≠β≠γ τότε το τρίγωνο είναι ισόπλευρο.', 'ans2', 2);
INSERT INTO `questions` VALUES (9, 'Δίνεται τρίγωνο ΑΒΓ με γωνίες Α,Β,Γ.', 'Αν Α ̂≠Β ̂≠Γ ̂≠Α ̂ τότε το τρίγωνο είναι ισοσκελές.', 'Αν Α ̂=Β ̂=Γ ̂ τότε το τρίγωνο είναι ισοσκελές.', 'Αν Α ̂=Β ̂ και Β ̂=Γ ̂ τότε το τρίγωνο είναι ισοσκελές.', 'Αν Α ̂=Β ̂=Γ ̂ τότε το τρίγωνο είναι ισόπλευρο.', 'Αν Α ̂=Β ̂≠Γ ̂ τότε το τρίγωνο είναι ισόπλευρο.', 'ans4', 2);
INSERT INTO `questions` VALUES (10, 'Ποιο από τα παρακάτω είναι σίγουρα λάθος:', 'Ύψος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και είναι κάθετο στην πλευρά αυτή.', 'Ύψος τριγώνου λέγεται το κάθετο ευθύγραμμο τμήμα, που φέρεται από μια κορυφή προς την ευθεία της απέναντι πλευράς.', 'Το ύψος τριγώνου που φέρεται από μια κορυφή προς την απέναντι πλευρά, σχηματίζει ορθή γωνία με την πλευρά αυτή.', 'Ύψος τριγώνου είναι η απόσταση μιας κορυφής του από την απέναντι πλευρά.', 'Ύψος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και σχηματίζει γωνία 45 μοιρών με την πλευρά αυτή.', 'ans5', 2);
INSERT INTO `questions` VALUES (11, 'Ποιο από τα παρακάτω είναι η χαρακτηριστική ιδιότητα της μεσοκαθέτου ευθυγράμμου τμήματος;', 'Κάθε σημείο της ισαπέχει από το ευθύγραμμο τμήμα και αντιστρόφως.', 'Κάθε σημείο της ισαπέχει από το μέσο του ευθυγράμμου τμήματος και αντιστρόφως.', 'Διέρχεται από το μέσο του ευθυγράμμου τμήματος και είναι κάθετη σε αυτό.', 'Κάθε σημείο της ισαπέχει από τα άκρα του ευθυγράμμου τμήματος και αντιστρόφως.', 'Είναι κάθετη στο μέσον του ευθυγράμμου τμήματος.', 'ans4', 2);
INSERT INTO `questions` VALUES (12, 'Ποιο από τα παρακάτω είναι το σωστό:', 'Διχοτόμος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και διχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι η ημιευθεία που έχει αρχή μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι η ευθεία που αρχίζει από μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και τριχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της διπλανής πλευράς και διχοτομεί τη γωνία της κορυφής.', 'ans1', 2);
INSERT INTO `questions` VALUES (13, 'Ανάλογα με τις γωνίες τα τρίγωνα διακρίνονται σε:', 'οξυγώνια, αμβλυγώνια και ορθογώνια', 'οξυγώνια, αμβλυγώνια και ισοσκελή', 'οξυγώνια, ορθογώνια και ισόπλευρα', 'οξυγώνια, ισόπλευρα και σκαληνά', 'ορθογώνια, ισόπλευρα και αμβλυγώνια', 'ans1', 2);
INSERT INTO `questions` VALUES (14, 'Ποιο από τα παρακάτω είναι λάθος;', 'Αν δύο τόξα ενός κύκλου είναι ίσα, τότε και οι χορδές τους είναι ίσες και αντιστρόφως.', 'Αν δύο τόξα δύο κύκλων είναι ίσα, τότε και οι χορδές τους είναι ίσες και αντιστρόφως.', 'Αν ένα τόξο ενός κύκλου είναι ίσο με ένα τόξο ενός άλλου κύκλου, τότε και οι χορδές τους είναι ίσες.', 'Αν δύο τόξα δύο ίσων κύκλων είναι ίσα, τότε και οι χορδές τους είναι ίσες και αντιστρόφως.', 'Αν δύο τόξα ενός κύκλου είναι ίσα, τότε και οι χορδές τους είναι ίσες.', 'ans2', 2);
INSERT INTO `questions` VALUES (16, 'Τα δευτερεύοντα στοιχεία ενός τριγώνου είναι:', 'οι πλευρές, οι διχοτόμοι και τα ύψη', 'οι πλευρές, τα ύψη και οι διάμεσοι', 'οι πλευρές, οι γωνίες και οι διχοτόμοι', 'οι διάμεσοι, οι διχοτόμοι και τα ύψη', 'οι γωνίες, οι διάμεσοι και οι διχοτόμοι', 'ans4', 2);
INSERT INTO `questions` VALUES (18, 'Ποια είναι η πρωτεύουσα της Μεγάλης Βρεττανίας;', 'Λονδίνο', 'Μάντσεστερ', 'Λίβερπουλ', 'Ενδιβούργο', 'Γλασκώβη', 'ans1', 11);
INSERT INTO `questions` VALUES (19, 'Ποια είναι η πρωτεύουσα της Ισπανίας;', 'Βαρκελώνη', 'Μαδρίτη', 'Μαγιόρκα', 'Σεβίλλη', 'Τενερίφη', 'ans2', 11);
INSERT INTO `questions` VALUES (20, 'Ποια είναι η πρωτεύουσα της Ιταλίας;', 'Μιλάνο', 'Φλωρεντία', 'Ρώμη', 'Βενετία', 'Νάπολη', 'ans3', 11);
INSERT INTO `questions` VALUES (21, 'Ποια είναι η πρωτεύουσα της Σουηδίας;', 'Όσλο', 'Γκέτεμποργκ', 'Ουψάλα', 'Στοκχόλμη', 'Όσλο', 'ans4', 11);
INSERT INTO `questions` VALUES (22, 'Ποια είναι η πρωτεύουσα της Γερμανίας;', 'Βόννη', 'Αμβούργο', 'Μόναχο', 'Φραγκφούρτη', 'Βερολίνο', 'ans5', 11);
INSERT INTO `questions` VALUES (23, 'Ποια είναι η πρωτεύουσα του Βελγίου;', 'Βρυξέλλες', 'Λουξεμβούργο', 'Δουνκέρκη', 'Παρίσι', 'Άμστερνταμ', 'ans1', 11);
INSERT INTO `questions` VALUES (24, 'Αν από το κέντρο ενός κύκλου φέρουμε κάθετο σε μια τυχαία χορδή, τότε ποιο από τα παρακάτω είναι λάθος;', 'Η κάθετος αυτή διέρχεται από το μέσο της χορδής.', 'Η κάθετος αυτή διέρχεται από το μέσο του μικρού τόξου της χορδής.', 'Η κάθετος αυτή είναι παράλληλη με την χορδή.', 'Η κάθετος αυτή διέρχεται από το μέσο του μεγάλου τόξου της χορδής.', 'Η κάθετος αυτή διέρχεται από το μέσο οποιασδήποτε διαμέτρου.', 'ans3', 2);
INSERT INTO `questions` VALUES (25, 'Ποια είναι η πρωτεύουσα της Ουγγαρίας;', 'Πράγα', 'Βουδαπέστη', 'Βιέννη', 'Βίλνιους', 'Βρυξέλλες', 'ans2', 11);
INSERT INTO `questions` VALUES (26, 'Ποια είναι η πρωτεύουσα της Σερβίας;', 'Βουδαπέστη', 'Βιέννη', 'Βελιγράδι', 'Ζάγκρεμπ', 'Σεράγεβο', 'ans3', 11);
INSERT INTO `questions` VALUES (27, 'Ποια είναι η πρωτεύουσα της Γαλλίας;', 'Λυών', 'Μασσαλία', 'Λονδίνο', 'Παρίσι', 'Αθήνα', 'ans4', 11);
INSERT INTO `questions` VALUES (28, 'Ποια είναι η πρωτεύουσα της Λιθουανίας;', 'Κλέιπεντα', 'Ταλίν', 'Ρήγα', 'Μίνσκ', 'Βίλνιους', 'ans5', 11);
INSERT INTO `questions` VALUES (29, 'Ποια είναι η πρωτεύουσα της Πολωνίας;', 'Βουδαπέστη', 'Βαρσοβία', 'Κρακοβία', 'Πράγα', 'Μπρατισλάβα', 'ans2', 11);
INSERT INTO `questions` VALUES (30, 'Ποια είναι η πρωτεύουσα της Λευκορωσίας;', 'Μόσχα', 'Κίεβο', 'Μινσκ', 'Ταλίν', 'Ρήγα', 'ans3', 11);
INSERT INTO `questions` VALUES (31, 'Ποια είναι η πρωτεύουσα της Ουκρανίας;', 'Ρήγα', 'Ταλίν', 'Μίνσκ', 'Μόσχα', 'Κίεβο', 'ans5', 11);

-- --------------------------------------------------------

-- 
-- Δομή Πίνακα για τον Πίνακα `scores`
-- 

CREATE TABLE `scores` (
  `ID` int(11) NOT NULL auto_increment,
  `user_name` char(10) NOT NULL,
  `score` int(11) NOT NULL,
  `subject_ID` int(11) NOT NULL,
  `scale` varchar(255) NOT NULL,
  `playdate` datetime default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

-- 
-- 'Αδειασμα δεδομένων του πίνακα `scores`
-- 

INSERT INTO `scores` VALUES (80, 'user3', 0, 1, 'Αποτυχία', '2015-09-01 22:54:39');
INSERT INTO `scores` VALUES (81, 'user3', 0, 2, 'Αποτυχία', '2015-09-01 23:07:54');
INSERT INTO `scores` VALUES (82, 'user3', 0, 2, 'Αποτυχία', '2015-09-01 23:08:03');
INSERT INTO `scores` VALUES (83, 'user1', 0, 2, 'Αποτυχία', '2015-09-01 23:08:45');
INSERT INTO `scores` VALUES (84, 'user1', 0, 2, 'Αποτυχία', '2015-09-01 23:14:28');
INSERT INTO `scores` VALUES (85, 'user1', 0, 13, 'Αποτυχία', '2009-01-15 00:00:00');
INSERT INTO `scores` VALUES (86, 'user1', 0, 2, 'Αποτυχία', '2015-09-01 23:47:16');
INSERT INTO `scores` VALUES (87, 'user1', 0, 2, 'Αποτυχία', '2015-09-01 23:47:16');
INSERT INTO `scores` VALUES (88, 'user1', 0, 19, 'Αποτυχία', '2015-09-01 23:48:54');
INSERT INTO `scores` VALUES (89, 'user1', 0, 8, 'Αποτυχία', '2015-10-01 22:10:46');
INSERT INTO `scores` VALUES (90, 'user1', 0, 11, 'Αποτυχία', '2015-10-01 22:11:03');
INSERT INTO `scores` VALUES (91, 'user1', 60, 11, 'Καλώς', '2015-10-01 22:12:22');

-- --------------------------------------------------------

-- 
-- Δομή Πίνακα για τον Πίνακα `subjects`
-- 

CREATE TABLE `subjects` (
  `ID` int(11) NOT NULL auto_increment,
  `subject_name` varchar(20) NOT NULL default '',
  `description` varchar(80) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- 'Αδειασμα δεδομένων του πίνακα `subjects`
-- 

INSERT INTO `subjects` VALUES (1, 'ΑΛΓΕΒΡΑ_Α', 'ΑΛΓΕΒΡΑ Α ΛΥΚΕΙΟΥ');
INSERT INTO `subjects` VALUES (2, 'ΓΕΩΜΕΤΡΙΑ_Α', 'ΓΕΩΜΕΤΡΙΑ Α ΛΥΚΕΙΟΥ');
INSERT INTO `subjects` VALUES (3, 'ΑΛΓΕΒΡΑ_Β', 'ΑΛΓΕΒΡΑ Β ΛΥΞΕΙΟΥ');
INSERT INTO `subjects` VALUES (4, 'ΓΕΩΜΕΤΡΙΑ_Β', 'ΓΕΩΜΕΤΡΙΑ Β ΛΥΚΕΙΟΥ');
INSERT INTO `subjects` VALUES (5, 'ΜΑΘΗΜΑΤΙΚΑ_Β', 'ΜΑΘΗΜΑΤΙΚΑ ΚΑΤΕΥΘΥΝΣΗΣ Β ΛΥΚΕΙΟΥ');
INSERT INTO `subjects` VALUES (19, 'ΠΛΗΡΟΦΟΡΙΚΗ_Β', 'ΠΛΗΡΟΦΟΡΙΚΗ Β ΓΥΜΝΑΣΙΟΥ');
INSERT INTO `subjects` VALUES (11, 'ΓΕΩΓΡΑΦΙΑ_Β', 'ΓΕΩΓΡΑΦΙΑ ΕΥΡΩΠΗΣ Β ΓΥΜΝΑΣΙΟΥ');
INSERT INTO `subjects` VALUES (8, 'ΓΕΩΓΡΑΦΙΑ_Α', 'ΓΕΩΓΡΑΦΙΑ ΕΛΛΑΔΑΣ Α ΓΥΜΝΑΣΙΟΥ');
INSERT INTO `subjects` VALUES (13, 'ΠΛΗΡΟΦΟΡΙΚΗ_Α', 'ΠΛΗΡΟΦΟΡΙΚΗ Α ΓΥΜΝΑΣΙΟΥ');

-- --------------------------------------------------------

-- 
-- Δομή Πίνακα για τον Πίνακα `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` char(10) NOT NULL,
  `password` char(10) NOT NULL,
  `role` tinyint(1) NOT NULL default '0',
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 'Αδειασμα δεδομένων του πίνακα `user`
-- 

INSERT INTO `user` VALUES (1, 'admin', 'admin', 1, '');
INSERT INTO `user` VALUES (2, 'user1', 'user1', 0, 'Γεώργιος');
INSERT INTO `user` VALUES (4, 'user3', 'user3', 0, 'Ιωάννης');
INSERT INTO `user` VALUES (5, 'user2', 'user2', 0, 'Φίλιππος');
