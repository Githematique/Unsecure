<?php

namespace UnsecureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommentsRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends EntityRepository
{
    /**
     * Retrieve all comments for a subject.
     *
     * @param int $subjectId
     *
     * @return Subject
     */
    public function findCommentBySubject($subjectId)
    {
        return $this->createQueryBuilder('c')
         ->where('c.subject = :subject')
         ->setParameters(array(
            ':subject' => $subjectId,
         ))
         ->getQuery()
         ->getResult();
    }
}
