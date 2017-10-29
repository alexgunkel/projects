<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 12:29
 */

namespace AlexGunkel\Persistence;

use AlexGunkel\Entities\Project;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class ProjectRepository
{
    /**
     * @var EntityRepository
     */
    private $repository;

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository(Project::class);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function addProject(Project $project): int
    {
        $this->entityManager->persist($project);
        $this->entityManager->flush();

        return $project->getUid();
    }

    public function findByIdentifier(int $identifier): Project
    {
        return $this->repository->findOneBy(
            ['id' => $identifier]
        );
    }
}