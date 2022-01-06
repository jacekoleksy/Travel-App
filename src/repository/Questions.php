<?php

require_once 'Repository.php';

class Questions extends Repository
{
    public function getNumberOfQuestions(): ?int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT count(*) FROM questions
        ');
        $stmt->execute();

        $numberofquesitons = $stmt->fetch(PDO::FETCH_ASSOC);

        return $numberofquesitons['count'];
    }

    public function getQuestionTitle(int $idq): ?string
    {
        $stmt = $this->database->connect()->prepare('
            SELECT description FROM questions
            WHERE id_questions = :idq
        ');
        $stmt->bindParam(':idq', $idq, PDO::PARAM_INT);
        $stmt->execute();

        $numberofquesitons = $stmt->fetch(PDO::FETCH_ASSOC);

        return $numberofquesitons['description'];
    }

    public function getWidthValue(int $idq): ?int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT value_w FROM questions
            WHERE id_questions = :idq
        ');
        $stmt->bindParam(':idq', $idq, PDO::PARAM_INT);
        $stmt->execute();

        $numberofquesitons = $stmt->fetch(PDO::FETCH_ASSOC);

        return $numberofquesitons['value_w'];
    }

    public function getHeightValue(int $idq): ?int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT value_h FROM questions
            WHERE id_questions = :idq
        ');
        $stmt->bindParam(':idq', $idq, PDO::PARAM_INT);
        $stmt->execute();

        $numberofquesitons = $stmt->fetch(PDO::FETCH_ASSOC);

        return $numberofquesitons['value_h'];
    }
}