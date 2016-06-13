<?php

namespace Commcloud\VoiceBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
 * HtWorkeractdurationDataRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HtWorkeractdurationDataRepository extends EntityRepository
{
    public function findByStartTime($workersid, $starttime, $endtime)
    {
        $repository = $this->getEntityManager()
                            ->getRepository('CommcloudVoiceBundle:HtWorkeractdurationData');
        $query = $repository->createquerybuilder('p')
                                ->where('p.workersid = :wsid and p.start_time between :starttime and :endtime')
                                ->setParameter('wsid', $workersid)
                                ->setParameter('starttime',$starttime)
                                ->setParameter('endtime', $endtime)
                                ->groupBy('p.start_time, p.activitysid')
                                ->orderBy('p.start_time', 'ASC')
                                ->getQuery();
        
        return $query->getResult();
    }
}