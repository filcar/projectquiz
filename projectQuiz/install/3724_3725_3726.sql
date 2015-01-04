-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 04 Ιαν 2015 στις 19:20:33
-- Έκδοση διακομιστή: 5.5.39
-- Έκδοση PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `3724_3725_3726`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`ID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL DEFAULT '',
  `ans1` varchar(255) NOT NULL DEFAULT '',
  `ans2` varchar(255) NOT NULL DEFAULT '',
  `ans3` varchar(255) NOT NULL DEFAULT '',
  `ans4` varchar(255) NOT NULL DEFAULT '',
  `ans5` varchar(255) NOT NULL DEFAULT '',
  `corans` varchar(8) NOT NULL DEFAULT '',
  `subject_ID` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Άδειασμα δεδομένων του πίνακα `questions`
--

INSERT INTO `questions` (`ID`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `corans`, `subject_ID`) VALUES
(1, 'Τα κύρια στοιχεία ενός τριγώνου είναι:', 'οι πλευρές και οι διχοτόμοι', 'οι πλευρές και τα ύψη', 'οι πλευρές και οι γωνίες', 'οι γωνίες και οι διχοτόμοι', 'οι γωνίες και οι διάμεσοι', 'ans3', 2),
(2, 'Σ’ ένα τρίγωνο ισχύει α=γ. Ποιο από τα παρακάτω είναι το σωστό:', 'Α ̂=Γ ̂', 'Α ̂=Β ̂', 'Β ̂=Γ ̂', 'Α ̂=Β ̂=Γ ̂', 'Α ̂=Β ̂≠Γ ̂', 'ans1', 2),
(3, 'Τα κριτήρια ισότητας τριγώνων είναι τα:', 'Π-Π-Π, Π-Π-Γ, Γ-Π-Γ', 'Π-Π-Π, Γ-Π-Π, Γ-Γ-Π', 'Π-Π-Π, Π-Γ-Π, Π-Γ-Γ', 'Π-Π-Π, Γ-Π-Π, Γ-Π-Γ', 'Π-Π-Π, Π-Γ-Π, Γ-Π-Γ', 'ans5', 2),
(4, 'Ποιο από τα παρακάτω είναι σωστό;', 'Αν δύο χορδές ενός κύκλου είναι ίσες, τότε και τα τόξα τους είναι ομοίως άνισα.', 'Αν δύο χορδές ενός κύκλου είναι ίσες, τότε και τα τόξα τους είναι ανομοίως άνισα.', 'Αν δύο χορδές ενός κύκλου είναι ομοίως άνισες, τότε και τα τόξα τους είναι ίσα.', 'Αν δύο χορδές ενός κύκλου είναι ανομοίως άνισες, τότε και τα τόξα τους είναι ίσα.', 'Αν δύο χορδές ενός κύκλου είναι ίσες, τότε και τα τόξα τους είναι ίσα και αντιστρόφως.', 'ans5', 2),
(5, 'Ανάλογα με τις πλευρές τα τρίγωνα διακρίνονται σε:', 'οξυγώνια, αμβλυγώνια και σκαληνά', 'σκαληνά, ισόπλευρα και ισοσκελή', 'σκαληνά, ισοσκελή και οξυγώνια', 'σκαληνά, ισόπλευρα και οξυγώνια', 'σκαληνά, ισόπλευρα και αμβλυγώνια', 'ans2', 2),
(6, 'Σε κάθε ισοσκελές τρίγωνο:', 'Το ύψος που φέρουμε από την κορυφή του είναι διάμεσος και μεσοκάθετος.', 'Η διάμεσος που φέρουμε από την κορυφή του είναι μεσοκάθετος και διχοτόμος.', 'Η διχοτόμος της γωνίας της κορυφής είναι διάμεσος και ύψος.', 'Η μεσοκάθετος είναι διάμεσος και διχοτόμος.', 'Η διάμεσος είναι ύψος και διχοτόμος.', 'ans3', 2),
(7, 'Ποιο από τα παρακάτω είναι το σωστό:', 'Διάμεσος τριγώνου είναι η ημιευθεία που έχει αρχή μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι η ευθεία που αρχίζει από μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και διχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και τριχοτομεί την πλευρά αυτή.', 'Διάμεσος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της διπλανής πλευράς και διχοτομεί την πλευρά αυτή.', 'ans3', 2),
(8, 'Δίνεται τρίγωνο ΑΒΓ με πλευρές α,β,γ.', 'Αν α=β=γ τότε το τρίγωνο είναι ισοσκελές.', 'Αν α=β τότε το τρίγωνο είναι ισοσκελές.', 'Αν α=β και β=γ τότε το τρίγωνο είναι ισοσκελές.', 'Αν α=β≠γ τότε το τρίγωνο είναι ισόπλευρο.', 'Αν α≠β≠γ τότε το τρίγωνο είναι ισόπλευρο.', 'ans2', 2),
(9, 'Δίνεται τρίγωνο ΑΒΓ με γωνίες Α,Β,Γ.', 'Αν Α ̂≠Β ̂≠Γ ̂≠Α ̂ τότε το τρίγωνο είναι ισοσκελές.', 'Αν Α ̂=Β ̂=Γ ̂ τότε το τρίγωνο είναι ισοσκελές.', 'Αν Α ̂=Β ̂ και Β ̂=Γ ̂ τότε το τρίγωνο είναι ισοσκελές.', 'Αν Α ̂=Β ̂=Γ ̂ τότε το τρίγωνο είναι ισόπλευρο.', 'Αν Α ̂=Β ̂≠Γ ̂ τότε το τρίγωνο είναι ισόπλευρο.', 'ans4', 2),
(10, 'Ποιο από τα παρακάτω είναι σίγουρα λάθος:', 'Ύψος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και είναι κάθετο στην πλευρά αυτή.', 'Ύψος τριγώνου λέγεται το κάθετο ευθύγραμμο τμήμα, που φέρεται από μια κορυφή προς την ευθεία της απέναντι πλευράς.', 'Το ύψος τριγώνου που φέρεται από μια κορυφή προς την απέναντι πλευρά, σχηματίζει ορθή γωνία με την πλευρά αυτή.', 'Ύψος τριγώνου είναι η απόσταση μιας κορυφής του από την απέναντι πλευρά.', 'Ύψος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και σχηματίζει γωνία 〖45〗^0 με την πλευρά αυτή.', 'ans5', 2),
(11, 'Ποιο από τα παρακάτω είναι η χαρακτηριστική ιδιότητα της μεσοκαθέτου ευθυγράμμου τμήματος;', 'Κάθε σημείο της ισαπέχει από το ευθύγραμμο τμήμα και αντιστρόφως.', 'Κάθε σημείο της ισαπέχει από το μέσο του ευθυγράμμου τμήματος και αντιστρόφως.', 'Διέρχεται από το μέσο του ευθυγράμμου τμήματος και είναι κάθετη σε αυτό.', 'Κάθε σημείο της ισαπέχει από τα άκρα του ευθυγράμμου τμήματος και αντιστρόφως.', 'Είναι κάθετη στο μέσον του ευθυγράμμου τμήματος.', 'ans4', 2),
(12, 'Ποιο από τα παρακάτω είναι το σωστό:', 'Διχοτόμος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και διχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι η ημιευθεία που έχει αρχή μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι η ευθεία που αρχίζει από μια κορυφή του τριγώνου και τελειώνει σ’ ένα σημείο της απέναντι πλευράς και διχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της απέναντι πλευράς και τριχοτομεί τη γωνία της κορυφής.', 'Διχοτόμος τριγώνου είναι το ευθύγραμμο τμήμα που ενώνει μια κορυφή του τριγώνου μ’ ένα σημείο της διπλανής πλευράς και διχοτομεί τη γωνία της κορυφής.', 'ans1', 2),
(13, 'Ανάλογα με τις γωνίες τα τρίγωνα διακρίνονται σε:', 'οξυγώνια, αμβλυγώνια και ορθογώνια', 'οξυγώνια, αμβλυγώνια και ισοσκελή', 'οξυγώνια, ορθογώνια και ισόπλευρα', 'οξυγώνια, ισόπλευρα και σκαληνά', 'ορθογώνια, ισόπλευρα και αμβλυγώνια', 'ans1', 2),
(14, 'Ποιο από τα παρακάτω είναι λάθος;', 'Αν δύο τόξα ενός κύκλου είναι ίσα, τότε και οι χορδές τους είναι ίσες και αντιστρόφως.', 'Αν δύο τόξα δύο κύκλων είναι ίσα, τότε και οι χορδές τους είναι ίσες και αντιστρόφως.', 'Αν ένα τόξο ενός κύκλου είναι ίσο με ένα τόξο ενός άλλου κύκλου, τότε και οι χορδές τους είναι ίσες.', 'Αν δύο τόξα δύο ίσων κύκλων είναι ίσα, τότε και οι χορδές τους είναι ίσες και αντιστρόφως.', 'Αν δύο τόξα ενός κύκλου είναι ίσα, τότε και οι χορδές τους είναι ίσες.', 'ans2', 2),
(16, 'Τα δευτερεύοντα στοιχεία ενός τριγώνου είναι:', 'οι πλευρές, οι διχοτόμοι και τα ύψη', 'οι πλευρές, τα ύψη και οι διάμεσοι', 'οι πλευρές, οι γωνίες και οι διχοτόμοι', 'οι διάμεσοι, οι διχοτόμοι και τα ύψη', 'οι γωνίες, οι διάμεσοι και οι διχοτόμοι', 'ans4', 2),
(18, 'Ποια είναι η πρωτεύουσα της Μεγάλης Βρεττανίας;', 'Λονδίνο', 'Μάντσεστερ', 'Λίβερπουλ', 'Ενδιβούργο', 'Γλασκώβη', 'ans1', 11),
(19, 'Ποια είναι η πρωτεύουσα της Ισπανίας;', 'Βαρκελώνη', 'Μαδρίτη', 'Μαγιόρκα', 'Σεβίλλη', 'Τενερίφη', 'ans2', 11);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
`ID` int(11) NOT NULL,
  `user_name` char(5) NOT NULL,
  `score` int(11) NOT NULL,
  `subject_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`ID` int(11) NOT NULL,
  `subject_name` varchar(20) NOT NULL DEFAULT '',
  `description` varchar(80) NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Άδειασμα δεδομένων του πίνακα `subjects`
--

INSERT INTO `subjects` (`ID`, `subject_name`, `description`) VALUES
(1, 'ΑΛΓΕΒΡΑ_Α', 'ΑΛΓΕΒΡΑ Α ΛΥΚΕΙΟΥ'),
(2, 'ΓΕΩΜΕΤΡΙΑ_Α', 'ΓΕΩΜΕΤΡΙΑ Α ΛΥΚΕΙΟΥ'),
(3, 'ΑΛΓΕΒΡΑ_Β', 'ΑΛΓΕΒΡΑ Β ΛΥΞΕΙΟΥ'),
(4, 'ΓΕΩΜΕΤΡΙΑ_Β', 'ΓΕΩΜΕΤΡΙΑ Β ΛΥΚΕΙΟΥ'),
(5, 'ΜΑΘΗΜΑΤΙΚΑ_Β', 'ΜΑΘΗΜΑΤΙΚΑ ΚΑΤΕΥΘΥΝΣΗΣ Β ΛΥΚΕΙΟΥ'),
(9, 'ΜΑΘΗΜΑΤΙΚΑ_Γ', 'ΜΑΘΗΜΑΤΙΚΑ Γ ΛΥΚΕΙΟΥ'),
(11, 'ΓΕΩΓΡΑΦΙΑ_Β', 'ΓΕΩΓΡΑΦΙΑ ΕΥΡΩΠΗΣ Β ΓΥΜΝΑΣΙΟΥ'),
(8, 'ΓΕΩΓΡΑΦΙΑ_Α', 'ΓΕΩΓΡΑΦΙΑ ΕΛΛΑΔΑΣ Α ΓΥΜΝΑΣΙΟΥ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` char(5) NOT NULL,
  `password` char(5) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `fullname` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `fullname`) VALUES
(1, 'admin', 'admin', 1, ''),
(2, 'user1', 'user1', 0, ''),
(4, 'user3', 'user3', 0, 'fullname');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `scores`
--
ALTER TABLE `scores`
 ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `questions`
--
ALTER TABLE `questions`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT για πίνακα `scores`
--
ALTER TABLE `scores`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `subjects`
--
ALTER TABLE `subjects`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
