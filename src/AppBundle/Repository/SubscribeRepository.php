<?php

namespace AppBundle\Repository;

/**
 * SubscribeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SubscribeRepository extends \Doctrine\ORM\EntityRepository
{
    public function searchForUser($userid)
    {
        return $this->getEntityManager()
        ->createQuery('SELECT user FROM AppBundle:User user WHERE user.id=:id ')->
        setParameter('id',$userid)
        ->getOneOrNullResult();
    }
    public function isChannelSubscribed($subsriber,$channel)
    {
        return $this->getEntityManager()->createQuery('SELECT users FROM AppBundle:Subscribe users where users.subscriber=:id and users.channler=:id2 ')->setParameters(['id'=>$subsriber,'id2'=>$channel])->getResult();


    }

}
