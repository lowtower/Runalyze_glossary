<?php

declare(strict_types=1);

namespace Runalyze\Bundle\GlossaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    private function renderCorrectView(string $view, Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            return $this->render($view, [
                'extends' => 'base_logged_in.twig',
                'urlClass' => '',
            ]);
        }

        return $this->render($view, [
            'extends' => 'base_not_logged_in.html.twig',
            'urlClass' => 'class="external"',
        ]);
    }

    #[Route('/', name: 'glossary-index', methods['GET'])]
    public function indexAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/overview.html.twig', $request);
    }

    #[Route('/atl', name: 'glossary-atl', methods['GET'])]
    public function atlAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/atl.html.twig', $request);
    }

    #[Route('/ctl', name: 'glossary-ctl', methods['GET'])]
    public function ctlAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/ctl.html.twig', $request);
    }

    #[Route('/tsb', name: 'glossary-tsb', methods['GET'])]
    public function tsbAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/tsb.html.twig', $request);
    }

    #[Route('/easy-trimp', name: 'glossary-easy-trimp', methods['GET'])]
    public function easyTrimpAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/easy_trimp.html.twig', $request);
    }

    #[Route('/heat-index', name: 'glossary-heat-index', methods['GET'])]
    public function heatIndexAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/heat_index.html.twig', $request);
    }

    #[Route('/hrv', name: 'glossary-hrv', methods['GET'])]
    public function hrvAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/hrv.html.twig', $request);
    }

    #[Route('/marathon-shape', name: 'glossary-marathon-shape', methods['GET'])]
    public function marathonShapeAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/marathon_shape.html.twig', $request);
    }

    #[Route('/maximum-heart-rate', name: 'glossary-maximum-heart-rate', methods['GET'])]
    public function maximumHeartRateAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/maximum_heart_rate.html.twig', $request);
    }

    #[Route('/monotony', name: 'glossary-monotony', methods['GET'])]
    public function monotonyAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/monotony.html.twig', $request);
    }

    #[Route('/performance-condition', name: 'glossary-performance-condition', methods['GET'])]
    public function performanceConditionAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/performance_condition.html.twig', $request);
    }

    #[Route('/resting-heart-rate', name: 'glossary-resting-heart-rate', methods['GET'])]
    public function restingHeartRateAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/resting_heart_rate.html.twig', $request);
    }

    #[Route('/rpe', name: 'glossary-rpe', methods['GET'])]
    public function rpeAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/rpe.html.twig', $request);
    }

    #[Route('/swolf', name: 'glossary-swolf', methods['GET'])]
    public function swolfAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/swolf.html.twig', $request);
    }

    #[Route('/training-effect', name: 'glossary-training-effect', methods['GET'])]
    public function trainingEffectAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/training_effect.html.twig', $request);
    }

    #[Route('/training-strain', name: 'glossary-training-strain', methods['GET'])]
    public function trainingStrainAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/training_strain.html.twig', $request);
    }

    #[Route('/trimp', name: 'glossary-trimp', methods['GET'])]
    public function trimpAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/trimp.html.twig', $request);
    }

    #[Route('/vo2max', name: 'glossary-vo2max', methods['GET'])]
    public function vo2maxAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/vo2max.html.twig', $request);
    }

    #[Route('/windchill', name: 'glossary-windchill', methods['GET'])]
    public function windchillAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/windchill.html.twig', $request);
    }

    #[Route('/groundcontact', name: 'glossary-groundcontact', methods['GET'])]
    public function groundcontactAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/groundcontact.html.twig', $request);
    }

    #[Route('/groundcontact-time-balance', name: 'glossary-groundcontact-time-balance', methods['GET'])]
    public function groundcontactTimeBalanceAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/groundcontact_balance.html.twig', $request);
    }

    #[Route('/vertical-ratio', name: 'glossary-vertical-ratio', methods['GET'])]
    public function verticalRatioAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/vertical_ratio.html.twig', $request);
    }

    #[Route('/vertical-oscillation', name: 'glossary-vertical-oscillation', methods['GET'])]
    public function verticalOscillationAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/vertical_oscillation.html.twig', $request);
    }

    #[Route('/stride-length', name: 'glossary-stride-length', methods['GET'])]
    public function strideLengthAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/stride_length.html.twig', $request);
    }

    #[Route('/cadence', name: 'glossary-cadence', methods['GET'])]
    public function cadenceAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/cadence.html.twig', $request);
    }

    #[Route('/running-effectiveness', name: 'glossary-running-effectiveness', methods['GET'])]
    public function runningEffectivenessAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/running_effectiveness.html.twig', $request);
    }

    #[Route('/efficiency-index', name: 'glossary-efficiency-index', methods['GET'])]
    public function efficiencyIndexAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/efficiency_index.html.twig', $request);
    }

    #[Route('/self-evaluation', name: 'glossary-self-evaluation', methods['GET'])]
    public function selfEvaluationAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/self_evaluation.html.twig', $request);
    }

    #[Route('/run-dynamics', name: 'glossary-run-dynamics', methods['GET'])]
    public function runningDynamicsAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/running_dynamics.html.twig', $request);
    }

    #[Route('/respiration', name: 'glossary-respiration', methods['GET'])]
    public function respirationAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/respiration.html.twig', $request);
    }

    #[Route('/training_load_peak', name: 'glossary-training_load_peak', methods['GET'])]
    public function trainingLoadPeak(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/training_load_peak.html.twig', $request);
    }

    #[Route('/detection_run_walk', name: 'glossary-detection_run_walk', methods['GET'])]
    public function detectionRunWalk(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/detection_run_walk.html.twig', $request);
    }
}
