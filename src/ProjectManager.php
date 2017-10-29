<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:16
 */

namespace AlexGunkel;


use AlexGunkel\Entities\Project;
use AlexGunkel\Entities\Topic;
use AlexGunkel\Persistence\ProjectRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class ProjectManager
{
    /**
     * @var DatabaseConfiguration
     */
    private $databaseConfiguration;

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(DatabaseConfiguration $configuration)
    {
        $this->databaseConfiguration = $configuration;

        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__), $isDevMode);

        $db_config = $configuration->asArray();

        $this->entityManager = EntityManager::create($db_config, $config);
    }

    public function add(Project $project): self
    {
        $projectRepository = new ProjectRepository($this->entityManager);
        $projectRepository->addProject($project);

        return $this;
    }

    public function getPublicProjects(): array
    {
        $projectRepository = new ProjectRepository($this->entityManager);
        return $projectRepository->findAll();
    }

    public function getPossibleTopics(): array
    {
        $topicRepository = $this->entityManager->getRepository(Topic::class);

        return $topicRepository->findAll();
    }
}
