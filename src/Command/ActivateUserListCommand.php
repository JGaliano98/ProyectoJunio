<?php
// src/Command/ActivateUserListCommand.php
namespace App\Command;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Question\Question;

#[AsCommand(
    name: 'app:activate-user-list',
    description: 'Activa un usuario.',
    hidden: false,
    aliases: ['app:enable-user']
)]
class ActivateUserListCommand extends Command
{
    public function __construct(
        private UserRepository $userRepository,
        private EntityManagerInterface $entityManager
    ){
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Activa un usuario.')
            ->setHelp('Este comando permite activar un usuario estableciendo el atributo is_active a 1.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $inactiveUsers = $this->userRepository->findBy(['isActive' => false]);

        if (empty($inactiveUsers)) {
            $output->writeln('No hay usuarios inactivos registrados.');
            return Command::FAILURE;
        }

        $output->writeln('Seleccione un usuario inactivo para activar:');
        $table = new Table($output);
        $table->setHeaders(['Número', 'Correo Electrónico']);

        foreach ($inactiveUsers as $index => $user) {
            $table->addRow([$index + 1, $user->getEmail()]);
        }

        $table->render();

        $helper = $this->getHelper('question');
        $numberQuestion = new Question('Por favor, ingrese el número del usuario que desea activar: ');
        $number = (int) $helper->ask($input, $output, $numberQuestion);

        if ($number < 1 || $number > count($inactiveUsers)) {
            $output->writeln('Número inválido.');
            return Command::FAILURE;
        }

        $selectedUser = $inactiveUsers[$number - 1];

        // Confirmación de activación usando ChoiceQuestion
        $confirmQuestion = new ChoiceQuestion(
            '¿Está seguro de que desea activar este usuario? (Si/No)',
            ['No', 'Si'], // Opciones para el usuario
            0  // Respuesta por defecto es 'No'
        );
        $confirmQuestion->setErrorMessage('Opción inválida.');
        $confirmation = $helper->ask($input, $output, $confirmQuestion);

        if ($confirmation !== 'Si') {
            $output->writeln('Activación cancelada.');
            return Command::SUCCESS;
        }

        $selectedUser->setIsActive(true);
        $this->entityManager->flush();

        $output->writeln('<fg=green>Usuario activado con éxito.</>');

        return Command::SUCCESS;
    }
}
